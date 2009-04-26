
require( "iuplua" )

package.path = '..\\lib\\?.lua;'..package.path
require "dbhelper"
-- creates a button entitled Exit
btn_exit = iup.button{ title = "Exit" }
btn_dlg = iup.button{ title = "DoDlg" }
btn_exit1 = iup.button{ title = "Exit"}
require( "iupluacontrols" )
--create matrix
mat = iup.matrix {numcol=5, numlin=20,numcol_visible=5, numlin_visible=3, widthdef=80}
mat.resizematrix = "YES"
mat:setcell(0,0,"1")
mat:setcell(1,0,"2")
mat:setcell(2,0,"3")
mat:setcell(3,0,"4")
mat:setcell(0,1,"姓名")
mat:setcell(0,2,"说明")


-- creates a dialog and sets dialog's title and turns off resize, menubox, maximize and minimize
dlg = iup.dialog{
  iup.vbox{
	iup.hbox{mat},
	iup.hbox
		{
		iup.fill{}, btn_exit,btn_dlg, iup.fill{} }
		},

	title = "IupButton", resize = "NO", menubox = "NO", maxbox = "NO", minbox = "NO" }
txtname= iup.text{value="dd"}
txtcode =iup.text{value="dd"}
txtcomment = iup.text{value="dd"}
dlg1 = iup.dialog{
	iup.vbox{
		iup.hbox{
			iup.label { title = "姓名"},txtname
			},
			iup.hbox{
			iup.label { title = "编号"},txtcode
			},
				iup.hbox{
			iup.label { title = "说明"},txtcomment
			},
		iup.hbox{
		iup.fill{}, btn_exit1, iup.fill{}
		}
	},


	title = "IupButton1", resize = "NO", menubox = "NO", maxbox = "YES", minbox = "YES" }

function btn_exit:action()
  dlg:hide()
end
function btn_exit1:action()

  mat:setcell(line,1,txtname.value)
  mat:setcell(line,2,txtcode.value)
  mat:setcell(line,3,txtcomment.value)
  --update dataset
  row = dataset[line]
  oldname = row.name
  row.name = txtname.value
  row.code = txtcode.value
  row.comment = txtcomment.value
  --update database
  --inserttable("employee",{name=row.name,code=row.code,comment=row.comment})
  updatetable("employee",{name=row.name,code=row.code,comment=row.comment},string.format("name='%s'",oldname))
  --dbexec("insert into employee (comment,name,code) values('good man','lcjddd','001')")
  --  必须redraw，否则它根本不理我
  --mat.redraw ="ALL" --redraw all
  mat.redraw =string.format("L%d",line)--redraw current line
  dlg1:hide()
end
function splitlc(str)
  local r ={}
  for k,v in string.gmatch(str,"(%d+):(%d+)") do
    table.insert(r,k)
	table.insert(r,v)
  end
  return r
end
function dlg1:show_cb()
	line=tonumber(splitlc(mat.focus_cell)[1])
	local row =dataset[line]
	txtcomment.value = row.comment
	txtcode.value = row.code
	txtname.value = row.id
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

-- shows dialog
dlg:showxy( iup.CENTER, iup.CENTER)

iup.MainLoop()
