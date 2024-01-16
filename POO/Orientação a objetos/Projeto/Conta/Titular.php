<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Titular{
            private $endereco;
            private $pessoa;
            // public function __construct($nome, $cpf, $endereco)
            public function __construct(Pessoa $pessoa, $endereco)
            {
                $this->pessoa = $pessoa;
                // $this->nome = $nome;
                $this->endereco = $endereco;
            }

            public function getNome(){
                return $this->pessoa->getNome();
            }

            public function getCpf(){
                return $this->pessoa->getCpf();
            }

            public function getEndereco(){
                return $this->endereco;
            }

            
        }
    ?>
</body>
</html>