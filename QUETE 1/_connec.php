<?php
    // Informations de connexion à la base de données
    $host = 'localhost';
    $dbname = 'QuestPDO';
    $username = 'ALEXIS';
    $password = 'ALEX';

    // Connexion à la base de données
    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    } catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
?>