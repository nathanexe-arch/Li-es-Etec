<?php

require_once 'Produto.php';

$nome = $_POST['nome'];
$precoUnitario = $_POST['precoUnitario'];
$quantidade = $_POST['quantidade'];
$descontoPercentual = $_POST['descontoPercentual'];

$produto = new Produto($nome, $precoUnitario, $quantidade);

$valorTotal = $produto->calcularValorTotal();
$valorComDesconto = $produto->aplicarDesconto($descontoPercentual);
$estoqueBaixo = $produto->estaEmEstoqueBaixo();

include 'resultado.php';

?>
