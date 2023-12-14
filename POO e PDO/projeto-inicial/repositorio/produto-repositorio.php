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
            $dados['preco'],
            $dados['imagem']
        );
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
        $sql = "SELECT * FROM serenatto.produtos ORDER BY preco";
        $statement = $this->pdo->query($sql);
        $dados = $statement->fetchAll(PDO::FETCH_ASSOC);

        $todosDados = array_map(function ($produto){
            return $this->formarObjeto($produto);
        }, $dados);
        
        return $todosDados;
    }

    public function deletar($id){
        $sql = "DELETE FROM serenatto.produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }

    public function salvar(Produto $produto){
        $sql = "INSERT INTO serenatto.produtos (tipo, nome, descricao, preco, imagem) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getTipo());
        $statement->bindValue(2, $produto->getNome());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getImgDiretorio());
        $statement->execute();
    }

    public function buscar($id){
        $sql = "SELECT * FROM serenatto.produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $dados = $statement->fetch(PDO::FETCH_ASSOC);

        return $this->formarObjeto($dados);

    }

    public function atualizar(Produto $produto)
    {
        $sql = "UPDATE serenatto.produtos SET tipo = ?, nome = ?, descricao = ?, preco = ?, imagem = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getTipo());
        $statement->bindValue(2, $produto->getNome());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getImgDiretorio());
        $statement->bindValue(6, $produto->getId());
        $statement->execute();
    }
    

}