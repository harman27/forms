<?php


	require 'db.php';	
	$q= mysql_query("select * from students");
	$count= mysql_num_rows($q);
	echo "No of Students:- ".$count;
	echo "	<table>
		<tr>
			<th>s.no</th>
			<th>Name</th>
		</tr>";
		$i=1;
	while($r=mysql_fetch_assoc($q)){
		//print_r($r);
		echo "<tr>";
		echo "<td>$i</td>";
		echo "<td>".$r['name']."</td>";
		echo "<td><a href='delete.php?student=".$r['id']."'>delete</a></td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
	