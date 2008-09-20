require "luasql.sqlite3"
require "base"
env = luasql.sqlite3()
local con = assert(env:connect("..\\bin\\openilas.db"));


function notwork(con)
	cur = assert (con:execute
	[[SELECT count(*) as c FROM sqlite_master
	WHERE type='table' and tbl_name='employee']])
	row = cur:fetch ({}, "a") -- the rows will be indexed by field names
	print(row)
	if row.c =="1" then
	  assert (con:execute"drop table if exists employee ")
	end
	print(row.c)
end
function workfine(con)
	assert (con:execute"drop table if exists employee ")
	assert (con:execute"create table employee(a int)")
	assert (con:execute"insert into employee(a)values(1)")
	cur = assert (con:execute"select * from employee")
	row = cur:fetch ({}, "a") -- the rows will be indexed by field names
	print(string.format("Name: %s", row.a))
	while row do
	print (row)
	row = cur:fetch (row, "a") -- reusing the table of results
	end
end
--notwork(con)
workfine(con)
