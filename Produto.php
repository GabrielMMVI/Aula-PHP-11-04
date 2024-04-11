<?php

class Produto
{
//Atributos
var $preco;
var $descricao;
var $codigo;
var $quantidade;
//Métodos
function imprimeEtiqueta()
{
echo "Descrição: " .  $this->descricao.PHP_EOL;
echo "Código: " . $this->codigo.PHP_EOL;
}
}
$computador = new Produto();
$computador->descricao = "Computador foda";
$computador->codigo = "420-999.69";
$computador->preco = 3200.85;
$computador->quantidade = 3;

$computador->imprimeEtiqueta();