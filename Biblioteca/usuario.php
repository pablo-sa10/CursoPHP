<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Usuario{
            private $ID;
            private $nome;
            private $maximoLivros = 10;

            public function __construct($ID, $nome)
            {
                $this->ID = $ID;
                $this->nome = $nome;
            }

            public function getID(){
                return $this->ID;
            }

            public function getNome(){
                return $this->nome;
            }
        }
    ?>
</body>
</html>