<?php

$pdo = new PDO("mysql:host=localhost;dbname=alura", "root", "");

$id = $_GET['id'];
$sql = 'DELETE FROM alura.videos WHERE id = ?';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);

$statement->execute();

header('Location: /');