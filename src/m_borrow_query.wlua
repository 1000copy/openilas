
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
	self.btn_exit = iup.button{ title = "�˳�" ,action=function ()self.dlg:hide()end}
	self.btn_detail = iup.button{ title = "�鿴��ϸ",action=function() self:detail()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}
	self.text_readercode = iup.text{size=200}
	self.text_bookcode =iup.text{size=200}
	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"id")
	self.mat:setcell(0,2,"���߱���")
	self.mat:setcell(0,3,"˵��")


	self.dlg = iup.dialog{
	  iup.vbox{
		--iup.hbox{iup.fill{},iup.label{title="���߱���"},self.text_readercode,iup.fill{}},
		--iup.hbox{iup.fill{},iup.label{title="ͼ�����"},self.text_bookcode,iup.fill{}},
		iup.hbox
			{
			iup.fill{}, self.btn_exit,self.btn_detail,iup.fill{}
			},
		iup.hbox{self.mat}},
		title = "���Ĳ�ѯ", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
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




--[[�򿪱�ע���Ϳ��Ե�������
BorrowQuery()
iup.MainLoop()
--]]
--[[�򿪱�ע���Ϳ������в�������

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

