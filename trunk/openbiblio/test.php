<?php
//


?>


<?php
	$con = mysql_connect("localhost","OpenBiblio","1");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("OpenBiblio", $con);
	//mysql_query("set names gb2312");
	if (mysql_query("update staff set last_change_dt = sysdate(), last_change_userid=1, username='11111111111111', last_name='ss打开黑门的说的的的', first_name='11111111111111', suspended_flg='N', admin_flg='N', circ_flg='N', circ_mbr_flg='N', catalog_flg='N', reports_flg='N' where userid=2",$con))
	  {
	  echo "Database created";
	  }
	else
	  {
	  echo "Error creating database: " . mysql_error();
	  }

	mysql_close($con);
?>
