
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

inserttable("book",{name="�´��ҿ�",code="002",comment="good foreign book"})

inserttable("book",{name="����ʮ����",code="003",comment="good nation book"})
inserttable("book",{name="һ���˵Ŀ�ս",code="004",comment="good nation book"})

createtable("reader",true,
	{
	   id =ftPk,
	   name = ftVarchar(10),
	   code = ftVarchar(10),
	   comment=ftVarchar(10),
	})
inserttable("reader",{name="����",code="001",comment="�����"})

inserttable("reader",{name="�ν�",code="002",comment="�����"})

inserttable("reader",{name="����",code="003",comment="�����"})
inserttable("reader",{name="�ֳ�",code="004",comment="�����"})
inserttable("reader",{name="ʱǨ",code="005",comment="��ɷ��"})
print(selecttable("reader"))
