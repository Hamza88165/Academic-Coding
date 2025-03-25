<?php
include("../../../connexion.php");
$id=$_GET["id"];
$Nom=$_GET["nom"];
$Prenom=$_GET["prenom"];
$Email=$_GET["email"];
$Password=$_GET["password"];
$Role=$_GET["role"];

?>
<html>
<head>
<title>Modifier Users</title>
<link rel="stylesheet" href="StyleModif.css">
</head>
<body>
<h1>Modifier Users</h1>
<form action="ValiderModif.php" method="post">
	<div>
		<label>Id :</label>
		<input type="text" name="_id"  value="<?php echo $id ?>">
	</div>
	<div>
		<label>Nom :</label>
		<input type="text" name="_nom" value="<?php echo $Nom ?>">
	</div>
	<div>
		<label>Prenom :</label>
		<input type="text" name="_prenom" value="<?php echo $Prenom ?>">
	</div>
	<div>
		<label>Email :</label>
		<input type="email" name="_email" value="<?php echo $Email ?>">
	</div>
	<div>
		<label>Password :</label>
		<input type="password" name="_password" value="<?php echo $Password ?>">
	</div>
	<div>
		<label>Role :</label>
		<select name="_role">
			<option value="User" <?php if($Role == 'User')echo 'selected' ; ?>>User</option>
			<option value="Admin" <?php if($Role == 'Admin')echo 'selected' ; ?>>Admin</option>
		</select>
	</div>
	<input type="submit" value="Modifier">
</form>
</body>
</html>
<?php
// If the condition is true (i.e., $Role is 'User'), the string 'selected' is echoed, 
// which will add the selected attribute to this <option>.


// The selected attribute in the <option> tag makes this option the default
 // selected value in the dropdown when the page is rendered.
?>
