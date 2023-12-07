<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Conta.php';
        require_once 'Titular.php';
        require_once 'endereço.php';
        
        $primeiraConta = new Conta(new Titular('123456789-10', 'Pablo', new Endereco('Presidente Pudente', 'Barcelona', 'Luis Gonzaga', '100')));
        $endereco = new Endereco('Mauá', 'Vila Falchi', 'Anibal Vila Real', '225');
        $gustavo = new Titular('123456789-12', "Gustavo", $endereco);
        $contaDois = new Conta($gustavo);

        echo 
            "Nome: " . $primeiraConta->getNomeTitular() . "<br>" .
            "CPF: " . $primeiraConta->getCpfTitular() . "<br>" . 
            "Endereço: " . $primeiraConta->getCidade() . ', ' .
            $primeiraConta->getBairro() . ', ' .
            $primeiraConta->getRua() . ', ' .
            $primeiraConta->getNumero() . '<br>';
            

        echo "Numero de contas: " . Conta::getNumeroDeContas()
    ?>
</body>
</html>