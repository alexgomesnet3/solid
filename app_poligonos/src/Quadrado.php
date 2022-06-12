<?php

namespace src;
class Quadrado extends Retangulo {
    public function setLargura(float $largura): void {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
        $this->largura = $altura;
    }
}