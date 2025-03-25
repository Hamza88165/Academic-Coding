<?php
$db = new PDO("mysql:host=localhost;dbname=db_projet_produit","root","");
$id=$_GET["id"];
$Nm=$_GET["nom"];
$Pr=$_GET["prenom"];
$Ads=$_GET["adress"];
$Tph=$_GET["telephone"];
$query="UPDATE client SET Nom='$Nm',Prenom='$Pr',Adress='$Ads',Telephone='$Tph' WHERE id='$id'";
$db->exec($query);		
		
?>