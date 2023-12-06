<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Conta
        {
            public function __construct(
                public readonly $cpf,
                public readonly $nome,
                private $saldo = 0,
            )
            {
               
            } 

        }

        $contaUm = new Conta('123456789-10', 'Pablo');
        $contaDois = new Conta('123456789-12', "Gustavo");

        echo "Nome: " . $contaUm->nome . "<br>";
        ?>
</body>
</html>