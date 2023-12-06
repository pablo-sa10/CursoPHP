<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> oi
    <?php
        class Conta{
            public $cpf;
            public $nome;
            public $saldo;

            public function __toString() {
                return "CPF: $this->cpf, Nome: $this->nome, Saldo: $this->saldo";
            }
        }

        $umaConta = new Conta();
        $umaConta->saldo = 200;
        $umaConta->cpf = '123456789';
        $umaConta->nome = 'pablo';

        $segundaConta = new Conta();
        $segundaConta->cpf = '987.654.321-10';
        $segundaConta->nome = 'Patricia';
        $segundaConta->saldo = 1500;

        echo "$umaConta";
    
    ?>
</body>
</html>