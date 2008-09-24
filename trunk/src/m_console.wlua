
require( "iuplua" )
local unit_table_name = "reader"
package.path = '..\\lib\\?.lua;'..';.\\?.wlua;'..package.path
require "dbhelper"
require "m_reader"
require "m_book"
require "m_employee"
require "m_borrow"

-- creates a button entitled Exit

require( "iupluacontrols" )
require "classlib"
class.Console()
function Console:__init()
	--create self.matrix
	self.btn_exit = iup.button{ title = "退出" ,action=function ()self.dlg:hide()end}
	self.btn_reader = iup.button{ title = "读者",action=function() Reader() end}
	self.btn_book= iup.button{ title = "书",action=function() Book() end}
	self.btn_employee= iup.button{ title = "员工",action=function() Employee () end}
	self.btn_borrow= iup.button{ title = "借阅",action=function() Borrow () end}
	self.mat = iup.matrix {numcol=5, numlin=100,numcol_visible=5, numlin_visible=10, widthdef=80}


	self.dlg = iup.dialog{
	  iup.vbox{
		iup.hbox
			{
			iup.fill{}, self.btn_exit,self.btn_reader, self.btn_book,self.btn_employee,self.btn_borrow,iup.fill{} }
			},

		title = "openilas console", resize = "YES", menubox = "NO", maxbox = "NO", minbox = "NO" }

	self.dlg:showxy( iup.CENTER, iup.CENTER)
end



Console()


---[[

iup.MainLoop()
--]]
