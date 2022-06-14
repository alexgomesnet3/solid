<?php

require __DIR__."/vendor/autoload.php";

use src\Quadrado;
use src\Retangulo;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo "<h3>Area do Retangulo: ".$retangulo->getArea()."</h3>";

echo "</br'>";
$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo "<h3>Area do Quadrado: ".$quadrado->getArea()."</h3>";

echo "</br'>";
$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo "<h3>LSP - Area do Retangulo: ".$retangulo->getArea()."</h3>";
