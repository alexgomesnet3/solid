<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testInicialEstadoItem() {
        $item = new Item();

        //Asserções no PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    /**
     * @dataProvider dataDescricao
     */
    public function testGetSetDescricao($descricao) {
        $item = new Item();

        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    // Abaixo segue o Data Provider com as descrições
    public function dataDescricao() {
        return [
            ['Jogo de Xicaras'],
            ["Aspas Duplas"],
            ['']
        ];
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor) {
        $item = new Item();

        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    // Abaixo segue o Data Provider com os valores
    public function dataValores() {
        return [
            [100],
            [-2],
            [0]
        ];
    }

    public function testItemInvalido() {
        $item = new Item();

        //Testar o envio de válido e retornar true
        $item->setValor(550.99);
        $item->setDescricao('Geladeira');
        $this->assertEquals(true, $item->itemValido());

        //Testar o envio de inválido e retornar false (Descrição)
        $item->setValor(550.99);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        //Testar o envio de inválido e retornar false (Valor)
        $item->setValor(0);
        $item->setDescricao('Geladeira');
        $this->assertEquals(false, $item->itemValido());

        //Testar o envio de inválido todos os atributos errados e retornar false (Valor)
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }
}
