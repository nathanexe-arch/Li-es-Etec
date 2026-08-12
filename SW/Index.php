<?php
require_once 'Operacao.php';
$minhaConta = new Operacao();

$minhaConta->setValor1(32);
$minhaConta->setValor2(64);

echo "Soma: " . $minhaConta->somar() . "<br>";
echo "Subtração: " . $minhaConta->subtrair() . "<br>";
echo "Multiplicação: " . $minhaConta->multiplicar() . "<br>";
echo "Divizão: " . $minhaConta->dividir() . "<br>";
echo "Exponenciação: " . $minhaConta->exponenciar() . "<br>";
