 <?php 
	include 'db.php';
	$id= $_GET['student'];
	$q=mysql_query("delete from students where id='$id'");
	if($q){
		header("location: select.php");
	}
 ?>