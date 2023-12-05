<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function exibirMensagem($mensagem){
            echo "$mensagem <br>";
        }

        function saldoInsuficiente(){
            return "Erro: saldo insuficiente"; 
        }


        $contaCorrente = [
            '123.456.789-10' => [
                'titular' => 'Maria',
                'saldo' => '10000'
            ],
            '123.456.789-11' => [
                'titular' => 'Pablo',
                'saldo' => '1000'
            ],
            '123.456.789-12' => [
                'titular' => 'Felipe',
                'saldo' => '100'
            ]
            ];

            $contaCorrente['123.456.789-11']['saldo'] += 7500;
            $contaCorrente['123.456.789-10']['saldo'] -= 100000;{
                if ($contaCorrente['123.456.789-10']['saldo'] < 100000){
                    exibirMensagem(saldoInsuficiente());
                }
            }
            foreach($contaCorrente as $cpf => $conta){ 
                exibirMensagem("$cpf: $conta[titular], $conta[saldo]");
            }      
    ?>
</body>
</html>