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

        //função para exibir mensagem
        function exibirMensagem($mensagem){
            echo "$mensagem <br>";
        }


        //função que executa a condição de saque
        function sacar($conta, $valorASacar){
            if ($valorASacar > $conta['saldo']){
                exibirMensagem("você não pode sacar");
            }else{
                $conta['saldo'] -= $valorASacar;
            }
            return $conta;
        }

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

            //parametro para a funçao sacar
            $contaCorrente['123.456.789-10'] = sacar($contaCorrente['123.456.789-10'], 500);
            $contaCorrente['123.456.789-11'] = sacar($contaCorrente['123.456.789-11'], 500);
            $contaCorrente['123.456.789-12'] = sacar($contaCorrente['123.456.789-12'], 100);

            //echo para printar as contas correntas atualizadas
            foreach($contaCorrente as $cpf => $conta){ 
                exibirMensagem("$cpf: $conta[titular], $conta[saldo]");
            }  
            
    ?>
</body>
</html>