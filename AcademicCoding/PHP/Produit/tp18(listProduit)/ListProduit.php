<?php
// recherche par reference/ designation/ min /max
include("../../connexion.php");
$search=isset($_POST["search"])? trim($_POST["search"]) : "";
$Min = isset($_POST["min"]) ? trim($_POST["min"]) : "";
$Max = isset($_POST["max"]) ? trim($_POST["max"]) : "";

$qr = "SELECT * FROM produit WHERE 1=1 ";
if($search != ""){
	$qr .= "&& (reference LIKE '%$search%' || designation LIKE '%$search%') ";
}
if($Min != ""){
	$qr .= " && prix >= $Min";
}
if($Max != ""){
		$qr .= " && prix <= $Max";
}
$result = $db->query($qr);

// $totalProduit=$result->rowCount();
?> 
<html>
<head>
    <link rel="stylesheet" href="StyleListproduit.css">
</head>
<body>
<form method="post" class="search">
<label>Rechercher: </label>
<input type="text" name="search" placeholder="Rechercher" value="<?php echo htmlspecialchars($search); ?>">
<input type="text" name="min" placeholder="Min" value="<?php echo htmlspecialchars($Min); ?>">
<input type="text" name="max" placeholder="Max" value="<?php echo htmlspecialchars($Max); ?>">
<button type="submit" >
	<img src="rechercher.png" width="20px" height="20px" alt="recherche icone">
</button><br> 
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
