<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'livro.php';
        require_once 'usuario.php';

        class Biblioteca{
            private $livro;
            private $usuario;
            
            public function __construct($livro, $usuario)
            {
                $this->livro = $livro;
                $this->usuario = $usuario;
            }

            public function getTitulo(){
                return $this->livro->getTitulo();
            }

            public function getAutor(){
                return $this->livro->getAutor();
            }

            public function getAno(){
                return $this->livro->getAno();
            }

            public function getID(){
                return $this->usuario->getID();
            }

            public function getNome(){
                return $this->usuario->getNome();
            }
        }
    ?>
</body>
</html>