<?php

namespace src;

class Leitor {

    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string {
        return $this->diretorio;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio) {
        return $this->diretorio;
    }

    public function setArquivo(string $arquivo) {
        return $this->arquivo;
    }

    public function lerArquivo() {
        echo 'teste';
    }
}
