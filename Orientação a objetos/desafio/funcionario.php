<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Funcionario{
            private $nome;
            private $cpf;

            public function __construct($cpf, $nome)
            {
                $this->cpf = $cpf;
                $this->nome = $nome;
            }

            public function getCpf(){
                return $this->cpf;
            }

            public function getNome(){
                return $this->nome;
            }
        }

        $pablo = new Funcionario(123456789, "pablo");
        $titular = new Titular($pablo);
    ?>
</body>
</html>