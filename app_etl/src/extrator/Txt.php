<?php

namespace src\extrator;

use src\extrator\Arquivo;

class Txt extends Arquivo {

    public function lerArquivo(string $caminho): array {
        $handle = fopen($caminho, 'r');

        while(!feof($handle)) {
            $linha = fgets($handle); // O ponteiro interno de leitura do arquivo é incrementado
            $this->setDados(
                substr($linha, 11, 30), // Nome
                substr($linha, 0, 11), // cpf
                substr($linha, 41, 50) // Email
            );
        }

        fclose($handle);

        return $this->getDados();
    }
}

