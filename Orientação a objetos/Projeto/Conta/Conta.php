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
            private $titular;
            private $saldo = 0;
            private static $numeroDeContas = 0;

            public function __construct(Titular $titular)
            {
                $this->titular = $titular;
                self::$numeroDeContas++;
            }

            //recuperar dados do cliente
            public function getNomeTitular(){
                return $this->titular->getNome();
            }

            public function getCpfTitular(){
                return $this->titular->getCpf();
            }

            public function getCidade(){
                return $this->titular->getEndereco()->getCidade();
            }

            public function getBairro(){
                return $this->titular->getEndereco()->getBairro();
            }

            public function getRua(){
                return $this->titular->getEndereco()->getRua();
            }

            public function getNumero(){
                return $this->titular->getEndereco()->getNumero();
            }

            public function getSaldo(){
                return $this->saldo;
            }


            //contar numero de contas
            public static function getNumeroDeContas(){
                return Conta::$numeroDeContas;
            }

            public function __destruct()
            {
                self::$numeroDeContas--;
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
                $tarifa = $valorASacar * 0.05;
                $valorSaque = $valorASacar + $tarifa;
                if ($valorSaque > $this->saldo) {
                    echo "Saldo indisponível<br>";
                    return;
                }

                $this->saldo -= $valorSaque;
            }

            
            public function transferir($valorATransferir, Conta $contaDestino){
                if($valorATransferir > $this->saldo){
                    echo "saldo indisponivel<br>";
                    return;
                }

                $this->sacar($valorATransferir);
                $contaDestino->depositar($valorATransferir);
            }
        }
    ?>
</body>
</html>