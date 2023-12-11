<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';

        use GuzzleHttp\Client;
        use Symfony\Component\DomCrawler\Crawler;

        $client = new Client(['base_uri' => "http://alura.com.br/" ]);
        $crawler = new Crawler();

        $buscador = new \Alura\buscadorDeCursos\bucador($client, $crawler);
        $cursos = $buscador->buscar("cursos.alura.com.br/category/programacao/php");

        /* foreach($cursos as $curso){
            echo $curso->textContent;
        } */
    ?>
</body>
</html>