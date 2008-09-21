
require( "iuplua" )
local unit_table_name = "reader"
package.path = '..\\lib\\?.lua;.\\?.wlua'..package.path
require "dbhelper"
-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"
class.Borrow()
function Borrow:__init()
	--create self.matrix
	self.btn_exit = iup.button{ title = "ÍË³ö" ,action=function ()self.dlg:hide()end}
	self.btn_add = iup.button{ title = "Ìí¼Ó",action=function() self.reader_edit = BorrowEdit(self,true)end}
	self.btn_del = iup.button{ title = "É¾³ý",action=function() self:delete()end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}
	self.text_readercode = iup.text{size=200}
	self.text_bookcode =iup.text{size=200}
	self.mat:setcell(1,0,"1")
	self.mat:setcell(2,0,"2")
	self.mat:setcell(3,0,"3")
	self.mat:setcell(0,1,"ÐÕÃû")
	self.mat:setcell(0,2,"±àÂë")
	self.mat:setcell(0,3,"ËµÃ÷")
	-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
	self.dlg = iup.dialog{
	  iup.vbox{
		iup.hbox{iup.fill{},iup.label{title="¶ÁÕß±àÂë"},self.text_readercode,iup.fill{}},
		iup.hbox{iup.fill{},iup.label{title="Í¼Êé±àÂë"},self.text_bookcode,iup.fill{}},
		iup.hbox
			{
			iup.fill{}, self.btn_exit, self.btn_add,self.btn_del,iup.fill{}
			}

,
		iup.hbox{self.mat}},
		title = "½èÔÄ", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }
	self:refresh()
	self.dlg:showxy( iup.CENTER, iup.CENTER)
end

function Borrow:refresh()
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

function Borrow:refreshone(i)
	row = self.dataset[i]
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.name)
	self.mat:setcell(i,2,row.code)
	self.mat:setcell(i,3,row.comment)
	self.mat.redraw =string.format("L%d",i)
end

function Borrow:delete()
	local line = GetCurrLine(self.mat)
	deletetable(unit_table_name,string.format("id=%d",self.dataset[line].id))
	self.mat.dellin = line
	table.remove(self.dataset,line)
	self.mat.redraw =string.format("L%d",i)
end

function Borrow:appendone(row)
    i =table.maxn(self.dataset)+1
	self.mat.numlin = i
	self.mat:setcell(i,0,tostring(i))
	self.mat:setcell(i,1,row.name)
	self.mat:setcell(i,2,row.code)
	self.mat:setcell(i,3,row.comment)
	self.mat.redraw =string.format("L%d",i)
end





---[[
Borrow()
iup.MainLoop()
--]]
