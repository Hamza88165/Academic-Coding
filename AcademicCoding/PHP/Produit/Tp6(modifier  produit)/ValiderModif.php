<?php
//Connexion a la base de donnees
$db = new PDO("mysql:host=localhost;dbname=db_projet-produit","root","");
$ref=$_GET["reference"];
$des=$_GET["designation"];
$px=$_GET["prix"];
$qt=$_GET["quantite"];
$query="UPDATE produit SET designation='$des',prix=$px,quantite=$qt WHERE reference='$ref'";
$db->exec($query)		
		
?>