require "base"


require "luasql.sqlite3"
require "base"
env = luasql.sqlite3()
local con
function setconn(dbname)
  con = assert(env:connect(dbname))
end;

function dbexec(sql)
    assert(con)
	assert (con:execute (sql))
	print (sql)
end
function dbquery(sql)
    assert(con)
	local cur = assert (con:execute (sql))
	local row = cur:fetch ({}, "a") -- the rows will be indexed by field names
	local result ={}
	while row do
	    local row1 = row
		print (type(row))
		table.insert(result,row1)
		row = cur:fetch ({}, "a") -- reusing the table of results
	end

	return result
end

ftInt = {type="int" ,notnull=true,default=0}
ftDate= {type="date" }
function ftVarchar(len)
    assert(len)
	return  {type="varchar" ,len=len,notnull=true,default=""}
end
function createtable( tablename, forced,fields)
	attrDefs = fields or {}
	local dropsql =""
	if forced then
		dropsql = droptable(tablename)
	end
	-- Construct column definitions
	colstr={}
	for k,v in pairs(attrDefs) do
		local notnullstr,defaultstr,fieldtypestr="","",""
		if v.notnull then
		  notnullstr = "not null"
		else
		  notnullstr ="null"
		end
		if v~=nil and v.type =="int" then

			if v.default~=nil then
			  defaultstr = "default "..v.default
			end
			fieldtypestr = v.type.." "..notnullstr.." "..defaultstr
		elseif v~=nil and v.type=="varchar" then
			if v.default~=nil then
			  defaultstr = "default '"..v.default.."'"
			end
			if not v.len then
			  error("v.len must not be nil")
			end
			fieldtypestr = v.type.."("..v.len..") "..notnullstr.." "..defaultstr
		end
		table.insert(colstr,k.." "..fieldtypestr);
	end;
	colstr = table.concat(colstr, ", ")
	local sql = string.format("CREATE TABLE %s ( %s );", tablename, colstr)
	if dropsql then
	  dbexec(dropsql)
	end
	dbexec( sql)
end

function droptable( tableName)
    return string.format("DROP TABLE if exists %s ", tableName)
end
function quoted(str)
  return string.format("'%s'",str)
end
function inserttable(tablename,fvlist)
  local sql,fstr,vstr,flist,vlist="","","",{},{}
  for k,v in pairs(fvlist) do
	table.insert(flist,k)
	if type(v)=="int" then
		table.insert(vlist,v)
	else
		table.insert(vlist,quoted(v))
	end
  end
  fstr = table.concat(flist,",")
  vstr = table.concat(vlist,",")
  sql = string.format("insert into %s (%s) values(%s)",tablename,fstr,vstr)
  dbexec(sql)
end


