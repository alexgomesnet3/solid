<?php

namespace src;

use src\extrator\Arquivo;

class Leitor {

    private string $diretorio;
    private string $arquivo;

    public function getDiretorio(): string {
        return $this->diretorio;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio): void {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo): void {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array {
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\src\extrator\\' . ucfirst($extensao[1]); // txt ou csv - Fazendo com que o primeiro caractere da extensao fique maiusculo

        return call_user_func_array(
            [new $classe, 'lerArquivo'],
            [$caminho]
        );
    }
}
