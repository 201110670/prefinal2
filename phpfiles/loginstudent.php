<?php include 'config.php';?>
<?php
	header('Access-Control-Allow-Origin: *');
	$qry=mysql_query("select username,bdate from raccounts where username='".filt($_GET['username'])."' and bdate='".filt($_GET['bdate'])."' and type='Student' and status='1'");
		if(mysql_num_rows($qry)>0){
			$_SESSION['student']=$_GET['username'];
			echo 1;
		}
?>