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
            private $cargo;
            private $pessoa;

            public function __construct($pessoa, $cargo)
            {
                $this->pessoa = $pessoa;
                $this->cargo = $cargo;
            }

            public function getNome(){
                return $this->pessoa->getNome();
            }

            public function getCpf(){
                return $this->pessoa->getCpf();
            }

            public function getCargo(){
                return $this->cargo;
            }
        }
    ?>
</body>
</html>