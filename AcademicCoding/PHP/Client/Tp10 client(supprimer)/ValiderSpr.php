<?php
//Connexion a la base de donnees
$db = new PDO("mysql:host=localhost;dbname=db_projet-produit","root","");
$id=$_GET["id"];
$query="DELETE FROM client WHERE id=$id";
$db->exec($query)		
		
?>