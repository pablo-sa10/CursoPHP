<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Conta1.php';
        require_once 'Titular.php';
        
        $primeiraConta = new Conta(new Titular('123456789-10', 'Pablo'));
        $gustavo = new Titular('123456789-12', "Gustavo");
        $contaDois = new Conta($gustavo);

        echo "Nome: " . $primeiraConta->getNomeTitular(). "<br>";
        echo "CPF: " . $primeiraConta->getCpfTitular() . "<br>";

        echo "Numero de contas: " . Conta::getNumeroDeContas()
    ?>
</body>
</html>