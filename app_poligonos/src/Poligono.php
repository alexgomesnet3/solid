<?php

namespace src;

class Poligono {
    private $forma;

    public function setForma(object $forma): void {
        $this->forma = $forma;
    }

    public function getForma(): object {
        return $this->forma;
    }
}