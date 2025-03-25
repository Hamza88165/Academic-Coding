<?php
//Connexion a la base de donnees
include("../../connexion.php");
$ref=$_GET["reference"];
$des=$_GET["designation"];
$px=$_GET["prix"];
$qt=$_GET["quantite"];
$query="INSERT INTO produit(reference,designation,prix,quantite) VALUES('$ref','$des',$px,$qt)";
$db->exec($query)		
		
?>