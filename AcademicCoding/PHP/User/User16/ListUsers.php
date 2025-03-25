<?php
// 1-review afficher tableau base de donné
// 2-form modifier
// 3-form Supprimer
// 4-form ajouter
?>
<html>
<head>
    <link rel="stylesheet" href="StyleListUser.css">
    <script>
        function con_firm(){
            var conf = confirm("Etes vous sure de supprimer?");
            if (conf) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
	<a href="AjouterUsers/AjouterUsers.php"><img src="AjouterUsers/plus.png" width="40px" height="40px" alt="add icone"></a> 
    <table>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        include("../../connexion.php");
        $qr = "SELECT * FROM users";
        $result = $db->query($qr);
        while ($row = $result->fetch()) {
        ?>  
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["Nom"]; ?></td>
                <td><?php echo $row["Prenom"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Role"]; ?></td>
                <td>
                    <a href="ModifUsers/ModifUsers.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['Nom']; ?>&prenom=<?php echo $row['Prenom']; ?>&email=<?php echo $row["Email"]; ?>&role=<?php echo $row['Role']; ?>&password=<?php echo $row['Password']; ?>">Modifier</a>
                </td>
                <td>
                    <a href="SprUsers/SprUsers.php?id=<?php echo $row['id']; ?>" onclick="return con_firm()">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
