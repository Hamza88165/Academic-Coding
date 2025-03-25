<?php
// recherche par reference
include("../../connexion.php");
$x=isset($_GET["ref"])? trim($_GET["ref"]) : "";
if($x != ""){
	$qr = "SELECT * FROM produit WHERE reference='$x'";
}else{
	$qr = "SELECT * FROM produit";
}
$result = $db->query($qr);       
?> 
<html>
<head>
    <link rel="stylesheet" href="StyleListproduit.css">
</head>
<body>
<form method="get">
<label>Rechercher: </label>
<input type="text" name="ref" placeholder="Rechercher" value="<?php echo htmlspecialchars($x); ?>">
<button type="submit"><img src="rechercher.png" width="20px" height="20px" alt="recherche icone"></button><br> 
</form>
    <table>
        <tr>
            <th>Reference</th>
            <th>Designation</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
			<?php
			while ($row = $result->fetch()){
			?>
            <tr>
                <td><?php echo $row["reference"]; ?></td>
                <td><?php echo $row["designation"]; ?></td>
                <td><?php echo $row["prix"]; ?></td>
                <td><?php echo $row["quantite"]; ?></td>
            </tr>
			<?php
			}
			?>
    </table>

</body>
</html>
