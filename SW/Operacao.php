<?php

class Operacao {
    private $valor1;
    private $valor2;

    public function setValor1($valor1) {
        $this->valor1 = $valor1;
}
    public function setValor2($valor2) {
        $this->valor2 = $valor2;
}
    public function getValor1($valor1) {
        $this->valor1 = $valor1;
}
    public function getValor2($valor2) {
        $this->valor2 = $valor2;
}
    public function somar() {
        $resultado = $this->valor1 + $this->valor2;
    return $resultado;
    }
    public function subtrair() {
        $resultado = $this->valor1 - $this->valor2;
    return $resultado;
    }
    public function multiplicar() {
        $resultado = $this->valor1 * $this->valor2;
    return $resultado;
    }
    public function dividir() {
        $resultado = $this->valor1 / $this->valor2;
    return $resultado;
    }
    public function exponenciar() {
        $resultado = $this->valor1 ** $this->valor2;
    return $resultado;
    }
}
