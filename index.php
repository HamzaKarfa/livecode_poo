<?php
    require_once './config/autoloader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer des chats</title>
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
        <h1>Créer un chat</h1>
        <form action="./process/create_cat.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nome" placeholder="Tigrou">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name='age'>
            </div>
            <div class="mb-3">
                <label for="race" class="form-label">Race</label>
                <input type="text" class="form-control" id="race" name="race">
            </div>
            <div class="mb-3">
                <label for="proprietaire" class="form-label">Propriétaire</label>
                <input type="text" class="form-control" id="proprietaire" name="proprietaire">
            </div>

            <button type="submit" class="btn btn-danger">Créer un chat</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>