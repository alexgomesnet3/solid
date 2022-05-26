<?php

namespace App;

use App\CarrinhoCompra;

class Pedido {

    // attributes
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    // methods
    public function __construct() {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function teste() {

    }
}