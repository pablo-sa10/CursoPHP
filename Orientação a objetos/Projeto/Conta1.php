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
            public $cpf;
            public $nome;
            public $saldo = 0;

            public function sacar($valorASacar){
                if ($valorASacar > $this->saldo) {
                    echo "Saldo indisponível";
                    return;
                }

                $this->saldo -= $valorASacar;
                
            }

            public function depositar($valorADepositar){
                if($valorADepositar < 0){
                    echo "valor precisa ser disponível";
                    return;
                }

                $this->saldo += $valorADepositar;
            }

            public function transferir($valorATransferir, Conta $contaDestino){
                if($valorATransferir > $this->saldo){
                    echo "saldo indisponivel";
                    return;
                }
                
                $this->sacar($valorATransferir);
                $contaDestino->depositar($valorATransferir);
            }
            
        }
    ?>
</body>
</html>