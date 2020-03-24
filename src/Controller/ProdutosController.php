<?php

namespace App\Controller;

class ProdutosController extends AppController {

    public function listar() {
        $produtos = $this->Produtos->find();
        $this->set(compact('produtos'));
    }

}