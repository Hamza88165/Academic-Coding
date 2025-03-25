<?php
$Nm=$_GET["nom"];
$Pr=$_GET["prenom"];
$Ads=$_GET["adress"];
$Tph=$_GET["telephone"];
?>	
<html>
<head></head>
<body>
	<table>
		<tr>
			<td>Nom: </td>
			<td><?php echo $Nm ?></td>
		</tr>
		<tr>
			<td>Prenom: </td>
			<td><?php echo $Pr ?></td>
		</tr>
		<tr>
			<td>Adress: </td>
			<td><?php echo $Ads ?></td>
		</tr>
		<tr>
			<td>Telephone: </td>
			<td><?php echo $Tph ?></td>
		</tr>
	</table>
</body>
</html>
