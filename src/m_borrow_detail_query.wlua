
require( "iuplua" )
local unit_table_name = "reader"
package.path = '..\\lib\\?.lua;.\\?.wlua'..package.path
require "dbhelper"
-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"



class.BorrowDetailQuery()
function BorrowDetailQuery:__init(borrow_id)
	--create self.matrix
	self.borrow_id = borrow_id
	self.btn_exit = iup.button{ title = "退出" ,action=function ()self.dlg:hide()end}
	self.btn_add = iup.button{ title = "添加",action=function()  self:BorrowDetailQueryOne () end}
	self.btn_del = iup.button{ title = "删除",action=function() self:delete()end}
	self.btn_save_BorrowDetailQuery = iup.button{ title = "借阅完成",action=function() self:save_BorrowDetailQuery()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}
	self.text_readercode = iup.text{size=200}
	self.text_bookcode =iup.text{size=200}
	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"书名")
	self.mat:setcell(0,2,"书编码")
	self.mat:setcell(0,3,"说明")


	self.dlg = iup.dialog{
	  iup.vbox{
		--iup.hbox{iup.fill{},iup.label{title="读者编码"},self.text_readercode,iup.fill{}},
		--iup.hbox{iup.fill{},iup.label{title="图书编码"},self.text_bookcode,iup.fill{}},
		iup.hbox
			{
			iup.fill{}, self.btn_exit,iup.fill{}
			},
		iup.hbox{self.mat}},
		title = "借阅查询", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
	self.dlg:showxy( iup.CENTER, iup.CENTER)
	self.dataset = {}
	self:refresh()
end

function BorrowDetailQuery:refresh()
  local cond = string.format("borrow_id=%d and borrow_detail.book_code=book.code ",self.borrow_id)
  self.dataset = selecttable("borrow_detail,book",cond)
  local i = 0
  for _,row in pairs(self.dataset) do
    i = i +1
	self.mat.numlin = i
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.name)
	self.mat:setcell(i,2,row.book_code)
	self.mat:setcell(i,3,row.comment)
  end

end


function BorrowDetailQuery:appendone(row)

end




--[[打开标注，就可以单独运行
BorrowDetailQuery(1)
iup.MainLoop()
--]]
--[[打开标注，就可以运行测试用例

require "base"
require "luaunit"

TestBorrowDetailQuery = {} --class
	function TestBorrowDetailQuery:test_GetBook()
		code = '001'
		bookrow = GetBook(code)
		assert( bookrow.name=='programing in lua',"has error"..code)
    end

LuaUnit:run()
--]]

