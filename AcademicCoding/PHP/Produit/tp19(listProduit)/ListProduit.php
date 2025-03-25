<?php
// compter les nombres de produits
include("../../connexion.php");
$search=isset($_POST["search"])? trim($_POST["search"]) : "";
$Min = isset($_POST["min"]) ? trim($_POST["min"]) : "";
$Max = isset($_POST["max"]) ? trim($_POST["max"]) : "";

$WhereClause="WHERE 1=1";
if($search != ""){
	$WhereClause .= "&& (reference LIKE '%$search%' || designation LIKE '%$search%') ";
}
if($Min != ""){
	$WhereClause .= " && prix >= $Min";
}
if($Max != ""){
		$WhereClause .= " && prix <= $Max";
}
// requette pour recuperer et afficher les produit
$qrProduit = "SELECT * FROM produit $WhereClause ";
$result = $db->query($qrProduit);

// requette pour compter les produit
$qrCount = "SELECT COUNT(*) as total FROM produit $WhereClause";
$countResult=$db->query($qrCount);
$totalProduit=$countResult->fetch()["total"];

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
<p>le nombre des produis: <?php echo $totalProduit ;?></p>
</body>
</html>
