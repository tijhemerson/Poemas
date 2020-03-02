<?php
    $pdo = new PDO("mysql:host=localhost:8080;dbname=cadastro", "root", "");

    $pdo->exec("SET NAMES utf8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>