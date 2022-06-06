<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;
use src\Arquivo;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';
