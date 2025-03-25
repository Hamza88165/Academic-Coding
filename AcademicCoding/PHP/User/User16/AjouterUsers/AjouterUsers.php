<html>
<head>
<title>Ajouter Client</title>
<link rel="stylesheet" href="user15.css">
</head>
<body>
<div class="form-container">
<form action="ValidUserAjout.php" method="post">
	<h1>Ajouter Client</h1>
	<label>Nom: </label>
	<input type="text" name="nom" id="n1">	
	<label>Prenom: </label>
	<input type="text" name="prenom" id="p1">	
	<label>Email :</label>
	<input type="text" name="email" id="e1">
	<label>Password :</label>
	<input type="text" name="password" id="ps1">	
	<label>Role :</label>
	<select name="role" id="r1">
		<option value="User">User</option>
		<option value="Admin">Admin</option>
	</select>
	<button type="submit">Ajouter</button>
</form>
</div>
</body>
</html>