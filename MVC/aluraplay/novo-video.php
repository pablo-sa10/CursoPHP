<?php 

$pdo = new PDO("mysql:host=localhost;dbname=alura", "root", "");

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if($url === false){
    header('Location: /');
    exit();
}

$nome = $_POST['nome'];

$sql = 'INSERT INTO alura.videos (url, nome) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $nome);

$statement->execute();

// header('Location: listagem.php');
header('Location: /');