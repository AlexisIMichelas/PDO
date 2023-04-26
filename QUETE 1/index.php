<?php
    // Inclusion du fichier de connexion à la base de données
    require('_connec.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des amis</title>
</head>
<body>
    <h1>Liste des amis</h1>
    <ul>
    <?php
        $reponse = $bdd->query('SELECT * FROM friends');

        while ($donnees = $reponse->fetch())
        {
            echo '<li>' . $donnees['lastname'] . ' ' . $donnees['firstname'] . '</li>';
        }

        $reponse->closeCursor();
    ?>
    </ul>

    <h2>Ajouter un ami</h2>
    <form method="post" action="add_friend.php">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" required>

        <input type="submit" value="Ajouter">
    </form>
    
</body>
</html>
