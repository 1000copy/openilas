
require( "iuplua" )
package.path = '..\\lib\\?.lua;'..package.path
require "dbhelper"
-- creates a button entitled Exit
btn_exit = iup.button{ title = "Exit" }
btn_dlg = iup.button{ title = "DoDlg" }
btn_exit1 = iup.button{ title = "Exit" }
require( "iupluacontrols" )
--create matrix
mat = iup.matrix {numcol=5, numlin=3,numcol_visible=5, numlin_visible=3, widthdef=80}
mat.resizematrix = "YES"
mat:setcell(0,0,"1")
mat:setcell(1,0,"2")
mat:setcell(2,0,"3")
mat:setcell(3,0,"4")
mat:setcell(0,1,"ÐÕÃû")
mat:setcell(0,2,"ËµÃ÷")


-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
dlg = iup.dialog{
  iup.vbox{
	iup.hbox{mat},
	iup.hbox
		{
		iup.fill{}, btn_exit,btn_dlg, iup.fill{} }
		},

	title = "IupButton", resize = "NO", menubox = "NO", maxbox = "NO", minbox = "NO" }

dlg1 = iup.dialog{

	iup.hbox
		{
		iup.fill{}, btn_exit1, iup.fill{}
		}
		,

	title = "IupButton1", resize = "NO", menubox = "NO", maxbox = "YES", minbox = "YES" }

function btn_exit:action()
  dlg:hide()
end
function btn_exit1:action()
  dlg1:hide()
end
function btn_dlg:action()
  dlg1:popup( iup.CENTER, iup.CENTER)
end
-- fill data
setconn("..\\bin\\openilas.db")
dataset = dbquery("select * from employee")

local i = 0
for _,row in pairs(dataset) do
  i = i +1
  mat:setcell(i,1,row.name)
  mat:setcell(i,2,row.comment)
end
mat:setcell(i,2,"sdd")
-- shows dialog
dlg:showxy( iup.CENTER, iup.CENTER)

iup.MainLoop()
