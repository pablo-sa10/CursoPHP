<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa{
            public $nome;
            public $cpf;

            public function __construct($nome, $cpf)
            {
                $this->nome = $nome;
                $this->cpf = $cpf;
                $this->validaNome($nome);
            }

            public function getNome(){
                return $this->nome;
            }

            public function getCpf(){
                return $this->cpf;
            }

            //Validar dados
            public function validaNome($nome){
                if(strlen($nome) < 4){
                    echo"nome precisa ter pelo menos 4 caracteres<br>";
                    exit();
                }    
            }
        }
    ?>
</body>
</html>