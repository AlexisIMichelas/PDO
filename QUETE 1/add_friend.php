<?php
require('_connec.php');

if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && strlen($_POST['firstname']) <= 45 && strlen($_POST['lastname']) <= 45) {
    $insert = $bdd->prepare('INSERT INTO friends (lastname, firstname) VALUES (:lastname, :firstname)');

    $insert->execute(array(
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname']
    ));

    header('Location: index.php');
    exit();
} else {
    echo 'Erreur : les champs doivent être remplis et faire moins de 45 caractères.';
}
?>






