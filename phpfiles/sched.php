<?php include 'config.php' ?>
<?php

header('Access-Control-Allow-Origin: *');
	$student = $_POST['student'];
	$course;
	$curriculum;
	$qrys = mysql_query("select *
							from rstudents
							where student='".$student."'");
		while($get=mysql_fetch_array($qrys)){
		$course=$get['course'];
		$curriculum=$get['curriculum'];
		}
		
	echo '
	<table border="1">
	<th style="background-color:#50703f;color:white;">CLASS CODE</th>
	<th style="background-color:#50703f;color:white;">SUBJECT CODE</th>
	<th style="background-color:#50703f;color:white;">DAY</th>
	<th style="background-color:#50703f;color:white;">START</th>
	<th style="background-color:#50703f;color:white;">END</th>
	<th style="background-color:#50703f;color:white;">ROOM</th>
	';
	$qrys = mysql_query("select rclass.class,rclass.subject,rclass.day,rclass.start,rclass.end,rclass.room	from rclass,rgrades where rclass.class=rgrades.class and rgrades.student='".$student."'");
	
		while($r=mysql_fetch_array($qrys)){
		
			echo "<tr>";
			echo "<td>";
				echo $r[0];
			echo "</td>";
			echo "<td>";
				echo $r[1];
			echo "</td>";
				echo "<td>";
				echo $r[2];
			echo "</td>";
				echo "<td>";
				echo $r[3];
			echo "</td>";
				echo "<td>";
				echo $r[4];
			echo "</td>";
				echo "<td>";
				echo $r[5];
			echo "</td>";
		echo "</tr>";
			
	}
	
	
	
?>
