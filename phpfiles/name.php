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
		$lname=$get['lastname'];
		$fname=$get['firstname'];
		$year=$get['year'];
		}
		
		$qrys1 = mysql_query("select sem from renlistmentschedule");
		while($get1=mysql_fetch_array($qrys1)){
		$sem=$get1['sem'];
		}
		echo '<h3 style="color:black;">SEMESTER: <span id="sem" style="color:black">'.$sem.'</span></h3>';
		echo '<table border="1">';
		
	
		echo '<tr>';
		echo '<td><b>STUDENT ID NUMBER</b></td>';
		echo '<td>'.$student.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>NAME</b></td>';
		echo '<td>'.$lname.','.$fname.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>YEAR</b></td>';
		echo '<td><span id="year">'.$year.'</span</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>COURSE</b></td>';
		echo '<td>'.$course.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>CURRICULUM</b></td>';
		echo '<td>'.$curriculum.'</td>';
		echo '</tr>';
		
	
		echo '</table>';
?>