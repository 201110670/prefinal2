<?php include 'config.php' ?>
<?php

header('Access-Control-Allow-Origin: *');
	
	function Grades($year,$sem){
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
		$qry = mysql_query("select subject,title,lec,lab,prereq,year,sem 
							from rsubjects 
							where course='".$course."' and curriculum='".$curriculum."' and year='$year' and sem='$sem'");
	
		
		while($r=mysql_fetch_array($qry)){
		
			$grade = mysql_query("select 
									a.prelim,
									a.p_absent,
									a.midterm,
									a.m_absent,
									a.final,
									a.f_absent,
									(a.p_absent + a.m_absent + a.f_absent),
									b.instr,
									b.class,
									b.day,
									b.start,
									b.end,
									b.room,
									b.ay,
									b.sem
								from rgrades as a left join rclass as b using (class) 
								where a.student='".$student."' and a.subject='".$r[0]."'");
			
			if(mysql_num_rows($grade)>0){
				while($g = mysql_fetch_array($grade)){
				
					
					echo "
					<tr>
					<td><center>".$r[0]."</center></td>
					<td><center>".$g[0]."</center></td>
					<td><center>".$g[2]."</center></td>
					<td><center>".$g[4]."</center></td>
					</tr>
					 
					";
				}
				
			}else{
		
				echo "
				<tbody>
				
				<tr>
					<td><center>".$r[0]."</center></td>
					<td><center></center></td>
					<td><center></center></td>
					<td></td>
					</tr>
					
					</tbody>";
					
			}
		}
		echo 'Student ID Number :'.$student.'<br>';
		echo 'Course :'.$course.'<br>';
		echo 'Curriculum :'.$curriculum.'<br>';
													//student idnumber            //compute for GPA   																//student who logged in            //??						//??
	$qry2 = mysql_query("SELECT (sum(final)/count(student)) as 'GPA' FROM rgrades where student='".$student."' and sem='1' and yl='2nd' ");
	
	while($r2=mysql_fetch_array($qry2)){
			
			echo '<h1>GPA: '.number_format((float)$r2[0], 2, '.', '').'</h1>';
		
		}
		}
		
           
	echo '<table>
			<th style="background-color: #50703f;color:white;">Subject Codes&nbsp;&nbsp;&nbsp;</th>
             <th style="background-color: #50703f;color:white;">&nbsp;&nbsp;PRELIM&nbsp;&nbsp;</th>
             <th style="background-color: #50703f;color:white;">&nbsp;&nbsp;MIDTERM&nbsp;&nbsp;</th>
             <th style="background-color: #50703f;color:white;">&nbsp;&nbsp;FINAL&nbsp;&nbsp;</th>';
	echo Grades('2nd','1st'); 
	
	echo '</table>';
	
	

	
	
	
?>