<?php
$Nm=$_GET["nom"];
$Vll=$_GET["ville"];
$Gr=$_GET["genre"];
$Sp="";
$Lt="";
$Vg="";
$Nt="";
if(isset($_GET["sport"]))$Sp=$_GET["sport"].",";
if(isset($_GET["lecture"]))$Lt=$_GET["lecture"].",";
if(isset($_GET["voyage"]))$Vg=$_GET["voyage"].",";
if(isset($_GET["natation"]))$Vg=$_GET["natation"].",";
$Lr=$Sp.$Lt.$Vg.$Nt;
$Loisirs=substr($Lr,0,-1);
?>
<?php
// -isset()Function;Check whether a variable is empty.
// -substr(string,start,length):function returns a part of a string.
// 		**string	Required. Specifies the string to return a part of a string.
// 		**start	Required. Specifies where to start in the string
// 		**length	Optional. Specifies the length of the returned string
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
			<td>Ville: </td>
			<td><?php echo $Vll ?></td>
		</tr>
		<tr>
			<td>Genre: </td>
			<td><?php echo $Gr ?></td>
		</tr>
		<tr>
			<td>Loisirs: </td>
			<td><?php echo $Loisirs ?></td>
		</tr>
	</table>
</body>
</html>
