<?php

class Produto{
    private $id;
    private $tipo;
    private $nome;
    private $descricao;
    private $imagem;
    private $preco;

    public function __construct($id, $tipo, $nome, $descricao, $imagem, $preco)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    public function getID(){
        return $this->id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    /* public function getImagem(){
        return $this->imagem;
    } */

    public function getImgDiretorio(){
        return "img/".$this->imagem;
    }

    public function getPreco(){
        return $this->preco;
    }
}