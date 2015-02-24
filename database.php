<?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet1");
	
	if(isset($_POST['save'])){
		$u=$_POST['username'];	
		$p=$_POST['password'];	
		$q= mysql_query("insert into users 
		(username,password) values 
		('$u','$p') ");
		if($q){
			echo "inserted";
		}
	}
	
?>
<form method="post">
	<input type="text" name="username" /> <br>
	<input type="password" name="password" /> <br>
	<input type="submit" value="Save" name="save" />
</form>