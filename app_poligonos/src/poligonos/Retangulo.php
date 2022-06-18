<?php

namespace src\poligonos;

class Retangulo {
    protected $largura;
    protected $altura;

    public function setLargura(float $largura = 0): void {
        $this->largura = $largura;
    }

    public function getLargura(): float {
        return $this->largura;
    }

    public function setAltura(float $altura = 0): void {
        $this->altura = $altura;
    }

    public function getAltura(): float {
        return $this->altura;
    }
}