<?php 

require_once __DIR__ . '/vendor/autoload.php';

define("BASE_URL", "http://".$_SERVER['HTTP_HOST'].'/cursoPHP/MVC/aluraplay/');

if(!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/'){
    require_once 'listagem.php';
} elseif ($_SERVER['PATH_INFO'] === '/novo-video'){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        require_once 'formulario.php';
    } elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once 'novo-video.php';
    }
} elseif($_SERVER['PATH_INFO'] === '/editar'){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        require_once 'formulario.php';
    } elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once 'editar.php';
    }
}elseif($_SERVER['PATH_INFO'] === '/remover-video'){
    require_once 'remover-video.php';
} 
?>