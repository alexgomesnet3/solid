<?php

namespace App;

use App\Item;

class CarrinhoCompra {

    // attributes
    private $itens;

    // methods
    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens()
    {
        return $this->itens;
    }    

    public function adicionarItens(Item $item = null)
    {
        array_push($this->itens, $item);
        return true;
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }

}