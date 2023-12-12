<?php

require_once "conexao-bd.php";
require_once "modelo/produto.php";
require_once "repositorio/produto-repositorio.php";


$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header("Location: admin.php");

