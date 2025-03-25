<?php
include("../../../connexion.php");
$id=$_POST["_id"];
$Nm=$_POST["_nom"];
$Pr=$_POST["_prenom"];
$Eml=$_POST["_email"];
$Pss=$_POST["_password"];
$Rl=$_POST["_role"];
$query="UPDATE users SET Nom='$Nm',Prenom='$Pr',Email='$Eml',Password='$Pss',Role='$Rl' WHERE id='$id'";
$db->exec($query);		
		
?>