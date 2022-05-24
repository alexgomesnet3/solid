<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());
echo "</br>";
echo "Valor Total: ".$carrinho1->exibirValorTotal();
echo "</br>";


$carrinho1->adicionarItens('Bicicleta', 750.10);
$carrinho1->adicionarItens('Geladeira', 1250.70);
$carrinho1->adicionarItens('Tapete', 79.99);
$carrinho1->adicionarItens('Video-Game', 3550.00);

echo "</br>";
print_r($carrinho1->exibirItens());
echo "</br>";
echo "Valor Total Recalculado: ".$carrinho1->exibirValorTotal();

echo "</br>";
echo "Status: ".$carrinho1->exibirStatus();

echo "</br>";
if($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmacao do pedido. Carrinho nao possui itens.';
}

echo "</br>";
echo "Status: ".$carrinho1->exibirStatus();