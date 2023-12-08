<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*function soma($x){
            return $x + 2;
        }

        $sete = soma(5);
        echo $sete;*/
        
        // incluindo arquivo separado 
        include ('Arquivo separado, funcoes.php');

        //array associativo para conta corrente 
        $contaCorrente = [
            '123.456.789-10' => [
                'titular' => 'Maria',
                'saldo' => '10000'
            ],
            '123.456.789-11' => [
                'titular' => 'Pablo',
                'saldo' => '300'
            ],
            '123.456.789-12' => [
                'titular' => 'Felipe',
                'saldo' => '100'
            ]
            ];

            $contaCorrente['123.456.789-11'] = deposito($contaCorrente['123.456.789-11'], 5200);
            $contaCorrente['123.456.789-12'] = sacar($contaCorrente['123.456.789-12'], 1000);

            //echo para printar as contas correntas atualizadas
            foreach($contaCorrente as $cpf => $conta){ 
                exibirMensagem("$cpf: $conta[titular], $conta[saldo]");
            }  
            
    ?>
</body>
</html>