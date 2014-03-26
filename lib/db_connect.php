<?php
function connect_db()
{
$conn = mysql_pconnect("localhost","xxxxxxxxx","xxxxxxxxx")or die("Unable to connect database.");
	mysql_select_db("xxxx")or die("Database Not Found.");
	return $conn;
}
function execute_query($sql)
{
 $rs=mysql_query($sql);
 
 return $rs;
 
}
function close_db($conn) {
mysql_close($conn);
}

?>
