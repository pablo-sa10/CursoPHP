 <?php
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

    //função para depositar
    function deposito($conta, $valorADepositar){
        $conta['saldo'] += $valorADepositar;
        exibirMensagem("$valorADepositar reais depositado com sucesso!");
        return $conta;
    }
    ?>