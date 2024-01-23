<?php
    $host = 'localhost';
    $db = 'safo_hall';
    $user = 'Henry';
    $pwd = '1234567';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn,$user,$pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'Connection Succesfull';
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once './crud.php';
    $crud = new crud($pdo);
?>