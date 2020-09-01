<?php


include "servicos/mensagem_sessao.php";
include "servicos/validacao.php";
include "servicos/categoria_competidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

DefineCategoriaCompetidor($nome, $idade);


header('location: index.php');