
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

inserttable("employee",{name="sj",code="003",comment="good woman"})
inserttable("employee",{name="sh",code="004",comment="good man"})

createtable("book",true,
	{
	   id =ftPk,
	   name = ftVarchar(10),
	   code = ftVarchar(10),
	   comment=ftVarchar(10),
	})
inserttable("book",{name="programing in lua",code="001",comment="good foreign book"})

inserttable("book",{name="德川家康",code="002",comment="good foreign book"})

inserttable("book",{name="万历十五年",code="003",comment="good nation book"})
inserttable("book",{name="一个人的抗战",code="004",comment="good nation book"})

createtable("reader",true,
	{
	   id =ftPk,
	   name = ftVarchar(10),
	   code = ftVarchar(10),
	   comment=ftVarchar(10),
	})
inserttable("reader",{name="李逵",code="001",comment="天罡星"})

inserttable("reader",{name="宋江",code="002",comment="天罡星"})

inserttable("reader",{name="花荣",code="003",comment="天罡星"})
inserttable("reader",{name="林冲",code="004",comment="天罡星"})
inserttable("reader",{name="时迁",code="005",comment="地煞星"})


createtable("borrow",true,
	{
	   id =ftPk,
	   reader_code = ftVarchar(10),
	   comment=ftVarchar(10),
	})


createtable("borrow_detail",true,
	{
	   id =ftPk,
	   borrow_id=ftInt,
	   book_code = ftVarchar(10),
	})
inserttable("borrow",{reader_code="001",comment="自动添加"})
local borrow_id = lastid("borrow","id")
inserttable("borrow_detail",{book_code="001",borrow_id=borrow_id})
print(selecttable("borrow"))
print(selecttable("borrow_detail"))

