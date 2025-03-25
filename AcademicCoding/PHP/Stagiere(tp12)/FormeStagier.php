<html>
<head>
<title>Afficher Client</title>
</head>
<body>
<h1>Forme Stagière</h1>
<form action="ValiderAffichSt.php" method="get">
	<div>
		<label>Nom :</label>
		<input type="text" name="nom">
	</div>
	<div>
		<label>Ville :</label>
		<select name="ville">
			<option value="FES">Fes</option>
			<option value="Meknes">Meknes</option>
			<option value="Rabat">Rabat</option>
			<option value="Tanger">Tanger</option>
		</select>
	</div>
	<div>
		<label>Genre :</label>
		<label><input type="radio" name="genre" value="Homme">Mr</label>
		<label><input type="radio" name="genre" value="Femme">Mme</label>
	</div>
	<div>
		<label>Loisirs :</label>
		<label><input type="checkbox" name="sport" value="Sport">Sport</label>
		<label><input type="checkbox" name="lecture" value="Lecture">Lecture</label>
		<label><input type="checkbox" name="voyage" value="Voyage">Voyage</label>
		<label><input type="checkbox" name="natation" value="Natation">Natation</label>
	</div>
	<input type="submit" value="Afficher">
</form>
</body>
</html>