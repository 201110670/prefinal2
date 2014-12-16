<?php include 'config.php';?>
<?php
header('Access-Control-Allow-Origin: *');
	$qry=mysql_query("select username,password from rparents where username='".filt($_GET['username'])."'and password='".filt($_GET['password'])."' and type='parent'");
	
		if(mysql_num_rows($qry)>0){
			echo 1;
		}
?>