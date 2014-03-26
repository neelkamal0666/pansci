<?php
function get_announcements(){
			$sql="select * from ".DB_PREFIX."announcements";
			$conn = connect_db();
		 	$result=mysql_query($sql);
			if($result) {
	 		while($row=mysql_fetch_array($result)){
				$row_ann[] = $row;
			}
	 		close_db($conn);
			return $row_ann;
			}
}
?>


