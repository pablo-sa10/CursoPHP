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

        $client = new Client();
        $resposta = $client->request('GET', 'https://cursos.alura.com.br/category/programacao/php');

        $html = $resposta->getBody();

        $crawler =  new Crawler();
        $crawler->addHtmlContent($html);

        $cursos = $crawler->filter('course-card__progress course-card__progress--finished');

        foreach($cursos as $curso){
            echo $curso->textContent;
        }
    ?>
</body>
</html>