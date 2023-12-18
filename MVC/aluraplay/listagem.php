<?php

$pdo = new PDO("mysql:host=localhost;dbname=alura", "root", "");
$videoList = $pdo->query('SELECT * FROM alura.videos')->fetchAll(PDO::FETCH_ASSOC);

// var_dump($videoList); exit;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/flexbox.css">
    <link rel="stylesheet" href="./css/estilos-form.css">
    <title>AluraPlay</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>

<body>

    <header>

        <nav class="cabecalho">
            <a class="logo" href="./listagem.php"></a>

            <div class="cabecalho__icones">
                <a href="<?=$_SERVER["PHP_SELF"]?>/novo-video" class="cabecalho__videos"></a>
                <a href="./pages/login.html" class="cabecalho__sair">Sair</a>
            </div>
        </nav>

    </header>

    <ul class="videos__container" alt="videos alura">
        <?php foreach ($videoList as $video) : ?>
            <li class="videos__item">
                <iframe width="100%" height="72%" src="<?= $video['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="descricao-video">
                    <img src="./img/logo.png" alt="logo canal alura">
                    <h3><?= $video['nome']; ?></h3>
                    <div class="acoes-video">
                        <a href="<?=$_SERVER["PHP_SELF"]?>/editar?id=<?=$video['id'];?>">Editar</a>
                        <a href="<?=$_SERVER["PHP_SELF"]?>/remover-video?id=<?=$video['id']; ?>">Excluir</a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>
</body>

</html>