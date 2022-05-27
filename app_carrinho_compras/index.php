<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;


echo "<h3>Agora com SRP</h3>";

$pedido = new Pedido();
//------------------//------------------//
$item01 = new Item();
$item02 = new Item();

$item01->setDescricao('Bicicleta');
$item01->setValor(755.11);

$item02->setDescricao('Geladeira');
$item02->setValor(1250.74);
//------------------//------------------//
//------------------//------------------//
echo "<h4>Pedido Iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//------------------//------------------//
//------------------//------------------//
$pedido->getCarrinhoCompra()->adicionarItens($item01);
$pedido->getCarrinhoCompra()->adicionarItens($item02);
//------------------//------------------//
echo "<h4>Pedido com Itens</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//------------------//------------------//
echo "<h4>Itens do Pedido</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
//------------------//------------------//
echo "<h4>Valor do Pedido</h4>";
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;
//------------------//------------------//
echo "<h4>Validacao o Carrinho de Compras</h4>";
if($pedido->getCarrinhoCompra()->validarCarrinho() === true) {
    echo "Carrinho de Compras Valido!";
} else {
    echo "Carrinho de Compras Vazio!";
}
//------------------//------------------//
//------------------//------------------//
echo "<h4>E-mail</h4>";
if($pedido->getStatus() == 'confirmado') {
    echo $pedido->getStatus();
    echo EmailService::dispararEmail();
}
echo $pedido->getStatus();
