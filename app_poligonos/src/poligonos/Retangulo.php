<?php

namespace src\poligonos;

class Retangulo {
    protected $largura;
    protected $altura;

    public function setLargura(float $largura): void {
        $this->largura = $largura;
    }

    public function getLargura(): float {
        return $this->largura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function getAltura(): float {
        return $this->altura;
    }

    public function getArea(): float {
        return $this->getAltura() * $this->getLargura();
    }
}