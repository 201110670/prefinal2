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
		echo '<div align="center">';
		echo '<h4>Student ID Number: '.$student.'</h4>';
		echo '<h4>Course: '.$course.'</h4>';
		echo '<h4>Curriculum: '.$curriculum.'</h4>
		</div>
		';
?>