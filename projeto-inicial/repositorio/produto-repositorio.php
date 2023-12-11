<?php

class ProdutoRepositorio{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    private function formarObjeto($dados)
    {
        return new Produto($dados['id'],
            $dados['tipo'],
            $dados['nome'],
            $dados['descricao'],
            $dados['imagem'],
            $dados['preco']);
    }

    public function getOpcoesCafe(){
        $sql1 = "SELECT * FROM serenatto.produtos WHERE tipo = 'Café' ORDER BY preco";
        $statement = $this->pdo->query($sql1);
        $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $dadosCafe = array_map(function($cafe){
            return $this->formarObjeto($cafe);
        }, $produtosCafe);

    return $dadosCafe;
    }

    public function getOpcoesAlmoco(){
        $sql2 = "SELECT * FROM serenatto.produtos WHERE tipo = 'Almoço' ORDER BY preco";
        $statement = $this->pdo->query($sql2);
        $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);
    

        $dadosAlmoco = array_map(function($almoco){
            return $this->formarObjeto($almoco);
    }, $produtosAlmoco);

    return $dadosAlmoco;
    }

    public function buscarTodos(){
        $sql = "SELECT * FROM serenatto.produtos";
        $statement = $this->pdo->query($sql);
        $dados = $statement->fetchAll(PDO::FETCH_ASSOC);

        $todosDados = array_map(function ($produto){
            return $this->formarObjeto($produto);
        }, $dados);
        
        return $todosDados;
    }
}