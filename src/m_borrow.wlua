
require( "iuplua" )
local unit_table_name = "reader"
package.path = '..\\lib\\?.lua;.\\?.wlua'..package.path
require "dbhelper"
-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"
function GetBook(code)
  local bookrows = selecttable("book",string.format("code='%s'",code))
  if table.maxn(bookrows) > 0 then
	return bookrows[1]
  else
    return nil
  end
end


class.Borrow()
function Borrow:__init()
	--create self.matrix
	self.btn_exit = iup.button{ title = "退出" ,action=function ()self.dlg:hide()end}
	self.btn_add = iup.button{ title = "添加",action=function()  self:BorrowOne () end}
	self.btn_del = iup.button{ title = "删除",action=function() self:delete()end}
	self.btn_save_borrow = iup.button{ title = "借阅完成",action=function() self:save_borrow()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}
	self.text_readercode = iup.text{size=200}
	self.text_bookcode =iup.text{size=200}
	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"姓名")
	self.mat:setcell(0,2,"编码")
	self.mat:setcell(0,3,"说明")
	-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
	self.dlg = iup.dialog{
	  iup.vbox{
		iup.hbox{iup.fill{},iup.label{title="读者编码"},self.text_readercode,iup.fill{}},
		iup.hbox{iup.fill{},iup.label{title="图书编码"},self.text_bookcode,iup.fill{}},
		iup.hbox
			{
			iup.fill{}, self.btn_exit, self.btn_add,self.btn_del,self.btn_save_borrow,iup.fill{}
			}

,
		iup.hbox{self.mat}},
		title = "借阅", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }

	self.dlg:showxy( iup.CENTER, iup.CENTER)
	self.dataset = {}
end

function Borrow:save_borrow()
  local reader_code,comment,books
  reader_code = self.text_readercode.value
  comment = "手工"
  books ={}
  for _,v in pairs(self.dataset) do
    table.insert(books,v.code)
  end
  assert(save_borrow(reader_code,comment,books)~=0 )
  iup.Message("确定","已经完成本次借阅")
end
function Borrow:get_reader(code)
  local rows = selecttable("reader",string.format("code='%s'",code))
  if table.maxn(rows) > 0 then
	return rows[1]
  else
    return nil
  end
end

function Borrow:exists_reader(code)
  return self:get_reader(code)~=nil
end
function Borrow:BorrowOne()
	local readercode = self.text_readercode.value
	if self:exists_reader(readercode) then
		local code = self.text_bookcode.value
		local bookrow = GetBook(code)
		if bookrow ==nil then
			iup.Message("确定","书名不存在")
		else
			self:appendone(bookrow)
		end
	else
		iup.Message("确定","读者不存在")
	end
end


function Borrow:delete()
	--local line = GetCurrLine(self.mat)
	local line = self.mat
	deletetable(unit_table_name,string.format("id=%d",self.dataset[line].id))
	self.mat.dellin = line
	table.remove(self.dataset,line)
	self.mat.redraw =string.format("L%d",i)
end
function Borrow:exists(code)
  local r = false;
  for _,v in pairs(self.dataset) do
	if v.code == code then
	  return true
	end
  end
  return r
end
function Borrow:appendone(row)
	if not self:exists(row.code) then
		i =table.maxn(self.dataset)+1
		self.mat.numlin = i
		self.mat:setcell(i,0,tostring(i))
		self.mat:setcell(i,1,row.name)
		self.mat:setcell(i,2,row.code)
		self.mat:setcell(i,3,row.comment)
		self.mat.redraw =string.format("L%d",i)
		table.insert(self.dataset,row)
	else
		iup.Message("确定","已经在借阅列表内")
	end
end

function save_borrow(reader_code,comment,books)
  inserttable("borrow",{reader_code=reader_code})
  borrow_id = lastid("borrow","id")
  for _,book_code in pairs(books) do
	inserttable("borrow_detail",{book_code=book_code,borrow_id=borrow_id})
  end
  return borrow_id
end
-- 返回 isok,reader_code,books
function get_borrow(borrow_id)
  local cond = string.format("id=%d",borrow_id)
  local borrows = selecttable("borrow",cond)
  if table.maxn(borrows) == 0 then
	return false
  end
  local cond = string.format("borrow_id=%d",borrow_id)
  local borrow_detail = selecttable("borrow_detail",cond)
  local books = {}
  for _,v in pairs(borrow_detail) do
    table.insert(books,v.book_code)
  end
  return true,borrows[1].reader_code,books
end



--[[打开标注，就可以单独运行
Borrow()
iup.MainLoop()
--]]
--[[打开标注，就可以运行测试用例

require "base"
require "luaunit"

TestBorrow = {} --class
	function TestBorrow:test_GetBook()
		code = '001'
		bookrow = GetBook(code)
		assert( bookrow.name=='programing in lua',"has error"..code)
    end
	function TestBorrow:test_save_borrow()
		local reader_code = '001'
		local comment ="自动"
		local books = {'001','002','003'}
		local borrow_id = save_borrow(reader_code,comment,books)
		assert(borrow_id~=0,"has error"..tostring(borrow_id))
		local isok ,new_reader_code,books = get_borrow(borrow_id)
		assert(isok,"save not ok")
		assert(reader_code==new_reader_code,'save error reader_code '..tostring(new_reader_code))
		assert( table.maxn(books)==3,'save error books')
    end
LuaUnit:run()
--]]

