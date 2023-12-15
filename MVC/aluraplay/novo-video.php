<?php 

$pdo = new PDO("mysql:host=localhost;dbname=alura", "root", "");

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if($url === false){
    header('Location: listagem.php');
    exit();
}

$titulo = $_POST['titulo'];

$sql = 'INSERT INTO alura.videos (url, nome) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);

$statement->execute();

header('Location: listagem.php');