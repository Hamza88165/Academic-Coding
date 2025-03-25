<html>
<head></head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Adress</th>
			<th>Telephone</th>
		</tr>
<?php
$db = new PDO("mysql:host=localhost;dbname=db_projet_produit","root","");
$qr="SELECT * FROM client";
$result=$db->query($qr);
while($row=$result->fetch()){		
?>	
		<tr>
			<td><?php echo $row["id"]?></td>
			<td><?php echo $row["Nom"]?></td>
			<td><?php echo $row["Prenom"]?></td>
			<td><?php echo $row["Adress"]?></td>
			<td><?php echo $row["Telephone"]?></td>
		</tr>
<?php
}
?>
	</table>
</body>
</html>
<?php
// query method: sends the query to the database server, 
// 		executes it, and returns a PDOStatement object 
//	 	that can be used to fetch the resulting data.
	
	// A PDOStatement is an object representing the result 
	// set from a database query executed with PDO.

	// fetch method : Retrieve a single row from
	// the database query's result set.
	 
	 // The while loop continues to execute as long as 
	 // 	$result->fetch() returns a valid row.
// 		When there are no more rows to fetch,
 // 		fetch() returns false, and the loop stops.
?>