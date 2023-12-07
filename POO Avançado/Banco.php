<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'endereco.php';
        require_once 'Titular.php';        
        require_once 'Conta.php';
        require_once 'Funcionario.php';
       
        
        $pessoa = new Pessoa('Pablo', '123456');
        // echo "<pre>";
        // print_r($pessoa);
        // echo "</pre>";

        $endereco = new Endereco('Mauá', 'Vila Falchi', 'Anibal Vila Real', '225');       
        // $pablo = new Titular($pessoa->getNome(),$pessoa->getCpf(), $endereco);
        $pablo = new Titular($pessoa, $endereco);
        $primeiraConta = new Conta($pablo);
        $funcionario = new Funcionario("Pablo", "48147717890", "Programador");

        echo 
            "Nome: " . $primeiraConta->getNomeTitular() . "<br>" .
            "CPF: " . $primeiraConta->getCpfTitular() . "<br>" . 
            "Endereço: " . $primeiraConta->getCidade() . ', ' .
            $primeiraConta->getBairro() . ', ' .
            $primeiraConta->getRua() . ', ' .
            $primeiraConta->getNumero() . '<br>';

        echo "Funcionario: " . $funcionario->getNome() . "<br>";
            

        echo "Numero de contas: " . Conta::getNumeroDeContas();
        $endereco->setCidade('expedito');
        echo "<Br>nova cidade: ".$endereco->getCidade();
    ?>
</body>
</html>