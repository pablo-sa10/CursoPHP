<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Biblioteca.php';

        $livro = new Livro(
            "Game of Thrones",
            "Martin",
            "2000"
        );
        $Usuario = new Usuario(
            "001",
            "Pablo"
        );

        $biblioteca = new Biblioteca(
            $livro,
            $Usuario
        );

        echo
            "<h2>Histórico de Empréstimo de livro</h2><br>".
            "<strong>Usuário:</strong> ". $biblioteca->getNome(). "<br>".
            "<strong>ID:</strong> ". $biblioteca->getID(). "<br><br>".
            "O usuário pegou o livro: ". $biblioteca->getTitulo(). "<br>".
            "Do autor: ". $biblioteca->getAutor(). "<br>".
            "Ano de publicação: ". $biblioteca->getAno();
    ?>
</body>
</html>