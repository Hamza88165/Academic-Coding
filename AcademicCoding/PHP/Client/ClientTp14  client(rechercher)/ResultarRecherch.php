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
include("connexion.php");
$id=$_POST["id"];
$qr="SELECT * FROM client WHERE id=$id";
$result=$db->query($qr);
if($row=$result->fetch()){
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
