<?php

namespace App\Controller;

class OlaController extends AppController {

    public function index() {
        return $this->getResponse()->withStringBody('Olá!');
    }

    public function cumprimentar() {
        $nome = $this->getRequest()->getQuery('nome');
        return $this->getResponse()->withStringBody("Olá $nome!!!");
    }

    public function somar($numero1, $numero2) {
        $resultado = $numero1 + $numero2;
        return $this->getResponse()->withStringBody("$numero1 + $numero2 = $resultado");
    }

    public function multiplicar($numero1, $numero2) {
        $produto = $numero1 * $numero2;
        $this->set('n1', $numero1);
        $this->set('n2', $numero2);
        $this->set('resultado', $produto);
    }

}