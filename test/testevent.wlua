
require( "iuplua" )
package.path = '..\\lib\\?.lua;'..package.path
require "dbhelper"
-- creates a button entitled Exit
btn_exit = iup.button{ title = "Exit" }

txtname = iup.text{value="1"}
dlg = iup.dialog{
  iup.vbox{
	iup.hbox{mat},
	iup.hbox
		{
		txtname,
		iup.fill{}, btn_exit, iup.fill{} }
		},

	title = "IupButton", resize = "NO", menubox = "NO", maxbox = "NO", minbox = "NO"}
function btn_exit:action()
  dlg:hide()
end
--show_db �����ִ�Сд�����ǲ��ܶ�д�ɴ�Щ������SHOW_CB���е�
function dlg:show_cb()
	txtname.value = "foo��"

end
dlg:showxy( iup.CENTER, iup.CENTER)

iup.MainLoop()
