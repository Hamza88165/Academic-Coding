<?php
$db = new PDO("mysql:host=localhost;dbname=db_projet-produit","root","");
$Nm=$_GET["nom"];
$Pr=$_GET["prenom"];
$Ads=$_GET["adress"];
$Tph=$_GET["telephone"];
$query="INSERT INTO client(id,Nom,Prenom,Adress,Telephone) VALUES(0,'$Nm','$Pr','$Ads','$Tph')";
// $query="INSERT INTO client(Nom,Prenom,Adress,Telephone) VALUES('$Nm','$Pr','$Ads','$Tph')";
$db->exec($query)
		
?>