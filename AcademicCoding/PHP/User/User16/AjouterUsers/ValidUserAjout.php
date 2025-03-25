<?php
$db = new PDO("mysql:host=localhost;dbname=db_projet_produit", "root", "");
$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Role = $_POST["role"];
$query = "INSERT INTO users (Nom, Prenom, Email, Password, Role) VALUES ('$Nom','$Prenom','$Email','$Password','$Role')";
if(empty($Nom) ||empty($Prenom) ||empty($Email) ||empty($Password) ||empty($Role)){
	echo "Il ya des espaces vides";
}elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
	echo "adress email invalid";
}elseif(!preg_match('/[A-Z]/', $Password)){
	echo "met un majuscule";
}elseif(!preg_match('/[a-z]/', $Password)){
	echo "met un minuscule";
}elseif(!preg_match('/[0-9]/', $Password)){
	echo "met un chiffre";
}elseif(!preg_match('/[\W_]/', $Password)){
	echo "met un charactère special";
}else{
	$db->exec($query);
}
 
?>
