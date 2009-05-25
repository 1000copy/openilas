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
	$result = mysql_query("SELECT * FROM staff");	
	while($row = mysql_fetch_array($result))
	  {
	  echo $row['last_name'];	  
	  echo "<br />";
	  }


	mysql_close($con);
?>
