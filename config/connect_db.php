<?php

try {

    $pdo = new PDO('mysql:host=localhost;dbname=livecode_poo', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

} catch (\Throwable $th) {
    throw $th;
}