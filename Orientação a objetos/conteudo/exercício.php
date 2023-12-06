<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Produto{
            private $codigo;
            private $nome;
            private $preco = 0;
            private static $qtd_Produtos = 0;

            public function __construct($codigo, $nome, $preco) {
                $this->codigo = $codigo;
                $this->nome = $nome;
                $this->preco = $preco;
                self::$qtd_Produtos++;
            }

            public function getCodigo(){
                return $this->codigo;
            }

            public function getNome(){
                return $this->nome;
            }

            public function getPreco(){
                return $this->preco;
            }

            public static function getNumeroDeProdutos(){
                return self::$qtd_Produtos;
            }

            public function setPreco($novoPreco){
                $this->preco = $novoPreco;
            }
        }

        $novoProduto = new Produto(001, 'Xbox 360', 3000);
        $segundProduto = new Produto(002, "playstation 2", 5000);

        echo "<h2>Preço dos Produtos</h2><br>";
        echo 
            "Codigo: 00" . $novoProduto->getCodigo(). "------" .
            "Nome: " . $novoProduto->getNome() . "------" .
            "Preço: " . $novoProduto->getPreco() . "<br><br>";

        echo 
            "Codigo: 00" . $segundProduto->getCodigo(). "------" .
            "Nome: " . $segundProduto->getNome() . "------" .
            "Preço: " . $segundProduto->getPreco() . "<br><br>";

        echo "Quantidades de produtos: " . Produto::getNumeroDeProdutos() . "<br><br>";
        echo "<h2>Preço Atualizado dos Produtos</h2><br>";

        //atualiza preço do produto
        $novoProduto->setPreco(200);
        $segundProduto->setPreco(100);

        echo 
            "Codigo: 00" . $novoProduto->getCodigo(). "------" .
            "Nome: " . $novoProduto->getNome() . "------" .
            "Preço: " . $novoProduto->getPreco() . "<br><br>";

        echo 
            "Codigo: 00" . $segundProduto->getCodigo(). "------" .
            "Nome: " . $segundProduto->getNome() . "------" .
            "Preço: " . $segundProduto->getPreco() . "<br><br>";

        echo "Quantidades de produtos: " . Produto::getNumeroDeProdutos() . "<br>";
        
    ?>
</body>
</html>