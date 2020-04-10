<?php

namespace App\Controller;

class ProdutosController extends AppController {

    public function listar() {
        $produtos = $this->Produtos->find()->toList();
        $this->set(compact('produtos'));
        $this->viewBuilder()->setOption('serialize', ['produtos']);
    }

}