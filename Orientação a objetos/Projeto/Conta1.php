<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Conta{
            public $cpf;
            public $nome;
            public $saldo;

            public function sacar(float $valorASacar){
                if ($valorASacar > $this->saldo) {
                    echo "Saldo indisponível";
                } else {
                    $this->saldo -= $valorASacar;
                }
            }
        }
    ?>
</body>
</html>