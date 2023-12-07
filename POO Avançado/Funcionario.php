<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Funcionario extends Pessoa{
            private $cargo;

            public function __construct($nome, $cpf, $cargo)
            {
                $this->nome = $nome;
                $this->cpf = $cpf;
                $this->cargo = $cargo;
            }

            public function getCargo(){
                return $this->cargo;
            }
        }
    ?>
</body>
</html>