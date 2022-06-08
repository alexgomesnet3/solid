<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;
use src\Arquivo;

//---------------------------  TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

//---------------------------  CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

//---------------------------  XLSX
$leitorXLSX = new Leitor();
$leitorXLSX->setDiretorio(__DIR__.'/arquivos');
$leitorXLSX->setArquivo('dados.xlsx');
$arr_xlsx = $leitorXLSX->lerArquivo();

echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv, $arr_xlsx));
echo '</pre>';
