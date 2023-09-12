<?php

require_once '../config/autoloader.php';
require_once '../config/connect_db.php';
$chatManager = new ChatManager($pdo);
if (
    isset($_POST['nom'])
    && isset($_POST['age'])
    && isset($_POST['race'])
    && isset($_POST['proprietaire'])
    && !empty($_POST['proprietaire'])
    && !empty($_POST['race'])
    && !empty($_POST['age'])
    && !empty($_POST['nom'])
) {

    $chat = new Chat([
       "nom" => $_POST['nom'], 
       "age" => $_POST['age'], 
       "race" => $_POST['race'], 
       "proprietaire" => $_POST['proprietaire']
    ]);


    // me connecter à la base de données

    $chatManager->create($chat);

    header('Location: ../list.php?succes=le chat est bien enregistré !');
}else{
    header('Location: ../index.php?error=le formulaire n\'est pas valide');
}

