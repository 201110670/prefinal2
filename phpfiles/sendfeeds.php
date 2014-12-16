<?php include 'config.php' ?>
<?php
header('Access-Control-Allow-Origin: *');

	date_default_timezone_set("Asia/Manila"); 
	$nowdate = date("m/d/Y h:i A");
	$content = $_GET['content'];
	$id = $_GET['id'];
	
	mysql_query("insert into rfeeds(datetime,content,student,type) 
						values('".$nowdate."','".$content."','".$id."','student')");
?>