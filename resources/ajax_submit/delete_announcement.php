<?php
require_once("../../lib/config.php");
require_once("../../lib/db_connect.php");
$id = $_REQUEST['id'];
$sql = "delete from ".DB_PREFIX."announcements where id = '".$id."'";
connect_db();
$res= execute_query($sql);

?>
