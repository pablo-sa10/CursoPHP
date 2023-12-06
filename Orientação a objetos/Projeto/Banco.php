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
        $contaDois = new Conta(new Titular('123456789-12', "Gustavo"));


        $primeiraConta->depositar(500);
        $primeiraConta->sacar(300);

        $contaDois->depositar(1000);
        $contaDois->transferir(500, $primeiraConta);


        echo "Nome: " . $primeiraConta->getNomeTitular(). "<br>";
        echo "Cpf: " . $primeiraConta->getCpfTitular() . "<br>";
        echo "Saldo: " . $primeiraConta->getSaldo() . "<br><br>";

        echo $contaDois->getSaldo() . "<br>";

        echo Conta::getNumeroDeContas()
    ?>
</body>
</html>