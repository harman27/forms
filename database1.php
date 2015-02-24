<?php
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet3");
	
	if(isset($_POST['submit'])){
		$u= $_POST['name'];
		$q= mysql_query("insert into students (name) 
		values ('$u') ");
		if($q){
			echo "added";
		}
	}
	
	?>
	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="name" id="" />
			<input type="submit" value="Save" name="submit" />
		</form>
	</body>
	</html>
	
	