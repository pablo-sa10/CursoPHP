<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=mysql", "root", "");

// $pdo = new PDO('mySql:host=localhost;dbname=serenatto', 'root', 'santista10');
// $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $mysqli = new mysqli( 'localhost', 'root', 'santista10', 'serenatto');

echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Em caso de erro, mostrar a mensagem de erro
    echo "Erro na conexão: " . $e->getMessage();
}
// var_dump($pdo);