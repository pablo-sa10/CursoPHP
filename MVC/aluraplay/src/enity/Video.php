<?php

namespace Mvc\aluraplay\Enity;

class Video{
    public $url;
    public $nome;
    public $id;

    public function __construct($url, $nome){
        $this->setUrl($url);
        $this->nome = $nome;
    }

    private function setUrl($url){
        if(filter_var($url, FILTER_VALIDATE_URL) === false){
            throw new \InvalidArgumentException();
        }

        $this->url = $url;
    }

    public function setId($id){
        $this->id = $id;
    }
}
