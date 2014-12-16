<?php
include 'config.php';
header('Access-Control-Allow-Origin: *');
	$result = mysql_query("select * from rpost ORDER BY id DESC",$con) or die(mysql_error());
	while($data=mysql_fetch_array($result)){
	
	echo '<div id="box1" style="background-color:#1171b9;margin-left:-5px;">';
	echo '<div style="margin-top:-20px;color:white;>';
				echo "<h3><font face='Century Gothic'>".$data['datetime']."</font></h3>";
			echo	'</div>';
			echo '<div style="margin-top:-20px;color:white;" >';
				echo "<h3><font face='sans-serif'>".$data['content']."</font></h3>";
			echo	'</div>';
			echo '<div style="margin-top:-20px;color:black;" >';
				echo "<h3><font face='Century Gothic'>".$data['note']."</font></h3>";
			echo	'</div>';
	echo	'</div>';
			echo	'<br>';
	}
?>