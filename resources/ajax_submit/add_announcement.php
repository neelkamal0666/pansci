<?php
require_once("../../lib/config.php");
require_once("../../lib/db_connect.php");
$announcement = $_REQUEST['announcement'];
$sql = "insert into ".DB_PREFIX."announcements set note = '".$announcement."'";
connect_db();
$res= execute_query($sql);
?>
