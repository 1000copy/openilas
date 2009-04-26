
require( "iuplua" )
local unit_table_name = "book"
package.path = '..\\lib\\?.lua;'..package.path
require "dbhelper"
-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"
class.Book()
function Book:__init()
	--create self.matrix
	self.btn_exit = iup.button{ title = "退出" ,action=function ()self.dlg:hide()end}
	self.btn_edit = iup.button{ title = "编辑",action=function() self.book_edit = BookEdit(self,false)end}
	self.btn_add = iup.button{ title = "添加",action=function() self.book_edit = BookEdit(self,true)end}
	self.btn_del = iup.button{ title = "删除",action=function() self:delete()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}

	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"书名")
	self.mat:setcell(0,2,"编码")
	self.mat:setcell(0,3,"说明")
	-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
	self.dlg = iup.dialog{
	  iup.vbox{
		iup.hbox{self.mat},
		iup.hbox
			{
			iup.fill{}, self.btn_exit,self.btn_edit, self.btn_add,self.btn_del,iup.fill{} }
			},

		title = "添加书籍", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
	self:refresh()
	self.dlg:showxy( iup.CENTER, iup.CENTER)
end

function Book:refresh()
	self.dataset = selecttable(unit_table_name)

	local i = 0
	for _,row in pairs(self.dataset) do
		i = i +1
		self.mat:setcell(i,0,tostring(i))
		self.mat:setcell(i,1,row.name)
		self.mat:setcell(i,2,row.code)
		self.mat:setcell(i,3,row.comment)
	end
end

function Book:refreshone(i)
	row = self.dataset[i]
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.name)
	self.mat:setcell(i,2,row.code)
	self.mat:setcell(i,3,row.comment)
	self.mat.redraw =string.format("L%d",i)
end

function Book:delete()
	local line = GetCurrLine(self.mat)
	deletetable(unit_table_name,string.format("id=%d",self.dataset[line].id))
	self.mat.dellin = line
	table.remove(self.dataset,line)
	self.mat.redraw =string.format("L%d",i)
end

function Book:appendone(row)
    i =table.maxn(self.dataset)+1
	self.mat.numlin = i
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.name)
	self.mat:setcell(i,2,row.code)
	self.mat:setcell(i,3,row.comment)
	self.mat.redraw =string.format("L%d",i)
end

--class BookEdit

class.BookEdit()
function BookEdit:__init(book,isadd)
	--create self.matrix
	self.book = book
	self.isadd = isadd
	self.btn_exit = iup.button{ title = "Exit" ,action=function ()self:save()end}
	self.label =iup.label{title="书籍添加",size=100}
	self.label_name =iup.label{title="书名"}
	self.label_code =iup.label{title="编码"}
	self.label_comment =iup.label{title="备注"}
	self.text_name =iup.text{size=150};
	self.text_code =iup.text{size=150};
	self.text_comment =iup.text{size=150};
	self.dlg = iup.dialog{
	  iup.vbox{
		iup.hbox{self.label},
		iup.hbox{self.label_name,self.text_name},
		iup.hbox{self.label_code,self.text_code},
		iup.hbox{self.label_comment,self.text_comment},
		iup.hbox
			{
			iup.fill{}, self.btn_exit, iup.fill{} }
			},

		title = "添加书籍", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
	self:refresh()
	-- shows dialog
	self.dlg:popup( iup.CENTER, iup.CENTER)
end
function BookEdit:save()
	local line,row=0,{}
	if not self.isadd then
		line = GetCurrLine(self.book.mat)
		row = self.book.dataset[line]
	end
	row.name = self.text_name.value
	row.code =self.text_code.value
	row.comment =self.text_comment.value
	if not self.isadd then
		self.book:refreshone(line)
		updatetable(unit_table_name,row,string.format("id=%d",row.id))
	else
		inserttable(unit_table_name,row)
		row.id = lastid(unit_table_name,"id")
		self.book:appendone(row)
		table.insert(self.book.dataset,row)
	end
	self.dlg:hide()
end
function splitlc(str)
  local r ={}
  for k,v in string.gmatch(str,"(%d+):(%d+)") do
    table.insert(r,k)
	table.insert(r,v)
  end
  return r
end
function GetCurrLine(mat)
	return tonumber(splitlc(mat.focus_cell)[1])
end
function BookEdit:refresh()
	if not self.isadd then
		line = GetCurrLine(self.book.mat)
		self.row = self.book.dataset[line]
		self.text_name.value =self.row.name
		self.text_code.value =self.row.code
		self.text_comment.value =self.row.comment
	end
end




--[[
Book()
iup.MainLoop()
--]]
