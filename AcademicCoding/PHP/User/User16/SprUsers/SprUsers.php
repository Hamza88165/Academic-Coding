<?php
include("../../../connexion.php");
$id=$_GET["id"];
$query="DELETE FROM users WHERE id=$id";
$db->exec($query)		
		
?>