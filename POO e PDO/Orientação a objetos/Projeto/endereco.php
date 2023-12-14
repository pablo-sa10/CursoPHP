<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Endereco{
            private $cidade;
            private $bairro;
            private $rua;
            private $numero;

            public function __construct( $cidade , $bairro, $rua, $numero)
            {
                $this->cidade = $cidade;
                $this->bairro = $bairro;
                $this->rua = $rua;
                $this->numero = $numero;
            }

            public function getCidade(){
                return $this->cidade;
            }

            public function setCidade($cidade){
                $this->cidade = $cidade;
            }
            public function getBairro(){
                return $this->bairro;
            }

            public function getRua(){
                return $this->rua;
            }

            public function getNumero(){
                return $this->numero;
            }
        }
    ?>
</body>
</html>