<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Livro{
            private $titulo;
            private $autor;
            private $ano;
            private $numeroCopias = 100;

            public function __construct($titulo, $autor, $ano)
            {
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->ano = $ano;
            }

            public function getTitulo(){
                return $this->titulo;
            }

            public function getAutor(){
                return $this->autor;
            }

            public function getAno(){
                return $this->ano;
            }
        }
    ?>
</body>
</html>