<?php

$pdo = new PDO("mysql:host=localhost;dbname=alura", "root", "");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if($url === false){
    header('Location: listagem.php');
    exit();
}

$titulo = filter_input(INPUT_POST, 'nome');
if($titulo === false){
    header('Location: listagem.php');
    exit();
}

$sql = 'UPDATE alura.videos SET url = :url, nome = :nome WHERE id = :id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':url', $url);
$statement->bindValue(':nome', $titulo);
$statement->bindValue(':id', $id, PDO::PARAM_INT);

$statement->execute();
header('Location: listagem.php');