<?php
//Connexion a la base de donnees
$db = new PDO("mysql:host=localhost;dbname=db_projet_produit","root","");
$ref=$_GET["reference"];
$query="DELETE FROM produit WHERE reference='$ref'";
$db->exec($query)		
		
?>