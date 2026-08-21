<?php

class Produto
{
    private string $nome;
    private float $precoUnitario;
    private int $quantidade;

    public function __construct(string $nome, float $precoUnitario, int $quantidade)
    {
        $this->nome = $nome;
        $this->precoUnitario = $precoUnitario;
        $this->quantidade = $quantidade;
    }

    public function calcularValorTotal(): float
    {
        return $this->precoUnitario * $this->quantidade;
    }

    public function aplicarDesconto(float $percentual): float
    {
        $total = $this->calcularValorTotal();
        return $total - ($total * $percentual / 100);
    }

    public function estaEmEstoqueBaixo(): bool
    {
        return $this->quantidade < 5;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPrecoUnitario(): float
    {
        return $this->precoUnitario;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}
?>
