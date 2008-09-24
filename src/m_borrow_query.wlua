
require( "iuplua" )
package.path = '..\\lib\\?.lua;.\\?.wlua;'..package.path
require "dbhelper"
-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"
require "m_borrow_detail_query"



class.BorrowQuery()
function BorrowQuery:__init()
	--create self.matrix
	self.btn_exit = iup.button{ title = "退出" ,action=function ()self.dlg:hide()end}
	self.btn_detail = iup.button{ title = "查看明细",action=function() self:detail()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}
	self.text_readercode = iup.text{size=200}
	self.text_bookcode =iup.text{size=200}
	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"id")
	self.mat:setcell(0,2,"读者编码")
	self.mat:setcell(0,3,"说明")


	self.dlg = iup.dialog{
	  iup.vbox{
		--iup.hbox{iup.fill{},iup.label{title="读者编码"},self.text_readercode,iup.fill{}},
		--iup.hbox{iup.fill{},iup.label{title="图书编码"},self.text_bookcode,iup.fill{}},
		iup.hbox
			{
			iup.fill{}, self.btn_exit,self.btn_detail,iup.fill{}
			},
		iup.hbox{self.mat}},
		title = "借阅查询", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
	self.dlg:showxy( iup.CENTER, iup.CENTER)
	self.dataset = {}
	self:refresh()
end

function BorrowQuery:refresh()
  self.dataset = selecttable("borrow")
  local i = 0
  for _,row in pairs(self.dataset) do
    i = i +1
	self.mat.numlin = i
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.id)
	self.mat:setcell(i,2,row.reader_code)
	self.mat:setcell(i,3,row.comment)
  end

end

local function splitlc(str)
  local r ={}
  for k,v in string.gmatch(str,"(%d+):(%d+)") do
    table.insert(r,k)
	table.insert(r,v)
  end
  return r
end
local function GetCurrLine(mat)
	return tonumber(splitlc(mat.focus_cell)[1])
end

function BorrowQuery:detail()
  local line = GetCurrLine(self.mat)
  id = self.dataset[line].id
  if id ~=0 then
	BorrowDetailQuery(id)
  end
end




--[[打开标注，就可以单独运行
BorrowQuery()
iup.MainLoop()
--]]
--[[打开标注，就可以运行测试用例

require "base"
require "luaunit"

TestBorrowQuery = {} --class
	function TestBorrowQuery:test_GetBook()
		code = '001'
		bookrow = GetBook(code)
		assert( bookrow.name=='programing in lua',"has error"..code)
    end

LuaUnit:run()
--]]

