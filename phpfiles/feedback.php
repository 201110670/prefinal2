<?php
include 'config.php';
header('Access-Control-Allow-Origin: *');
$id = $_GET['id'];
	$result = mysql_query("select * from rfeeds where student='".$id."' ORDER BY id DESC",$con) or die(mysql_error());
	while($data=mysql_fetch_array($result)){
	$type=$data['type'];
	if($type=='admin'){
	echo $a='<div class="bubble2"><img src="css/cahslogo.png" width="20%;"/><div class="vertical-line" style="height: 1px;"></div></span>
  <p align="justify">'.$data['content'].'</p>
  <span align="right" class="timeago" title="'.$data['datetime'].'">
</div><br />';
}else if($type=='student'){
echo $b='<div class="bubble"><img src="css/images/studentfeeds.png" width="20%;"/><div class="vertical-line" style="height: 1px;"></div>
  <p align="justify">'.$data['content'].'</p>
  <span class="timeago" title="'.$data['datetime'].'"></span>
</div><br />';
}
	}
?>

