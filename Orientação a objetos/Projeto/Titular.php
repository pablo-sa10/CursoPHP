<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Titular{
            private $cpf;
            private $nome;

            public function __construct($cpf, $nome){
                $this->cpf = $cpf;
                $this->nome = $nome;
                $this->validaNome($nome);
            }

            public function getCpf(){
                return $this->cpf;
            }

            public function getNome(){
                return $this->nome;
            }

            //Validar dados
            private function validaNome($nome){
                if(strlen($nome) < 4){
                    echo"nome precisa ter pelo menos 4 caracteres<br>";
                    exit();
                }    
            }
        }
    ?>
</body>
</html>