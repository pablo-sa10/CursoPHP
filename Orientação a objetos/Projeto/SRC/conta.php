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
            public string $cpf;
            public string $nome;
            public float $saldo;
        }

        $umaNovaConta = new Conta();
        $umaNovaConta->saldo = 200;

    ?>
</body>
</html>