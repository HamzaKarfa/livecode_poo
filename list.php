<?php

require_once './config/autoloader.php';
require_once './config/connect_db.php';
$chatManager = new ChatManager($pdo);

$chats = $chatManager->findAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste chats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar bg-dark navbar-dark navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./list.php">Liste des chats</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php include './partials/flash.php'; ?>

    <div class="container">
        <h1>liste chat</h1>

        <div>
            <?php foreach ($chats as $chat) { ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $chat->getName() ?> </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"> <?php echo $chat->getAge() ?> ans</h6>
                        <p class="card-text"><?php echo $chat->getRace() ?></p>
                        <p class="card-text"><?php echo $chat->getProprietaire() ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>