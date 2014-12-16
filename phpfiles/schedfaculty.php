<?php include 'config.php' ?>
<?php

header('Access-Control-Allow-Origin: *');
	$student = $_POST['username'];
	$course;
	$curriculum;
	$qrys = mysql_query("select *
							from rinstructors
							where instr='".$student."'");
		while($get=mysql_fetch_array($qrys)){
		$course=$get['lastname'].', '.$get['firstname'];
		$curriculum=$get['position'];
		}
		echo'<table>
			<th>Name</th>
			<th>Position</th>
			<tr>
		';
		echo '<td>'.$course.'</td>';
		echo '<td>'.$curriculum.'</td>
		<tr></table>
		';
	
	
	echo '
	<table border="1">
	<th style="background-color:#0071bc;color:white;">CLASS CODE</th>
	<th style="background-color:#0071bc;color:white;">SUBJECT CODE</th>
	<th style="background-color:#0071bc;color:white;">DAY</th>
	<th style="background-color:#0071bc;color:white;">START</th>
	<th style="background-color:#0071bc;color:white;">END</th>
	<th style="background-color:#0071bc;color:white;">ROOM</th>
	';
	$qrys = mysql_query("select rclass.class,rclass.subject,rclass.day,rclass.start,rclass.end,rclass.room from rclass where instr='".$student."'");
	
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
