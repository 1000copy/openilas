
package.path = '..\\lib\\?.lua;'..package.path
require "dbhelper"

setconn("..\\bin\\openilas.db")
createtable("employee",true,
	{
	   id =ftPk,
	   name = ftVarchar(10),
	   code = ftVarchar(10),
	   comment=ftVarchar(10),
	})
inserttable("employee",{name="lcj",code="001",comment="good man"})

inserttable("employee",{name="sq",code="002",comment="good woman"})

