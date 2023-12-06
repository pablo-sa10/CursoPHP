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
            private $cpf;
            private $nome;
            private $saldo = 0;


            public function __construct($cpf, $nome)
            {
                $this->cpf = $cpf;
                $this->nome = $nome;
            }
            

            //funcoes de movimentação de dinheiro
            public function depositar($valorADepositar){
                if($valorADepositar < 0){
                    echo "valor precisa ser positivo<br>";
                    return;
                }

                $this->saldo += $valorADepositar;
            }

            public function sacar($valorASacar){
                if ($valorASacar > $this->saldo) {
                    echo "Saldo indisponível<br>";
                    return;
                }

                $this->saldo -= $valorASacar;
            }

            
            public function transferir($valorATransferir, Conta $contaDestino){
                if($valorATransferir > $this->saldo){
                    echo "saldo indisponivel<br>";
                    return;
                }

                $this->sacar($valorATransferir);
                $contaDestino->depositar($valorATransferir);
            }
            
            //recuperar dados do cliente
            public function getSaldo(){
                return $this->saldo;
            }
            
            public function getNome(){
                return $this->nome;
            }

            public function getCpf(){
                return $this->cpf;
            }
        }
    ?>
</body>
</html>