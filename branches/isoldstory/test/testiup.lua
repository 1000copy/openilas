-- Creates four buttons. The first uses images, the second turns the first
-- on and off, the third exits the application and the last does nothing

require( "iuplua" )

-- creates a button entitled Exit
btn_exit = iup.button{ title = "Exit" }

-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
dlg = iup.dialog{ iup.vbox{ iup.hbox{ iup.fill{}, btn_image, btn_on_off, btn_exit, iup.fill{} }, text, btn_big }; title = "IupButton", resize = "NO", menubox = "NO", maxbox = "NO", minbox = "NO" }


-- callback called when the exit button is activated
function btn_exit:action()
  dlg:hide()
end

-- shows dialog
dlg:showxy( iup.CENTER, iup.CENTER)

iup.MainLoop()
