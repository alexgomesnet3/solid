<?php

namespace src\extrator;

class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void {
        $this->dados[] = [
            'nome' => iconv('iso-8859-1', 'utf-8', $nome),
            'cpf' => iconv('iso-8859-1', 'utf-8', $cpf),
            'email' => iconv('iso-8859-1', 'utf-8', $email)
        ];
    }

    public function getDados(): array {
        return $this->dados;
    }

    /*
    public function lerArquivoCSV(string $caminho): void {
        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
    }

    public function lerArquivoTXT(string $caminho): void {
        $handle = fopen($caminho, 'r');

        while(!feof($handle)) {
            $linha = fgets($handle); // O ponteiro interno de leitura do arquivo é incrementado
            $this->setDados(
                substr($linha, 11, 30), // Nome
                substr($linha, 0, 11), // CPF
                substr($linha, 41, 50) // Email
            );
        }

        fclose($handle);
    } */

}
