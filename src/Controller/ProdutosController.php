<?php

namespace App\Controller;

class ProdutosController extends AppController {

    public function initialize(): void {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index() {
        $produtos = $this->Produtos->find()->toList();
        $this->set(compact('produtos'));
        $this->viewBuilder()->setOption('serialize', ['produtos']);
    }

    public function view($id) {
        $produto = $this->Produtos->get($id);
        $this->set(compact('produto'));
        $this->viewBuilder()->setOption('serialize', ['produto']);
    }

    public function add() {
        $this->request->allowMethod(['post']);
        $produto = $this->Produtos->newEntity($this->request->getData());
        if ($this->Produtos->save($produto)) {
            $mensagem = 'Salvo';
        } else {
            $mensagem = 'Erro';
        }
        $this->set([
            'mensagem' => $mensagem,
            'produto' => $produto,
        ]);
        $this->viewBuilder()->setOption('serialize', ['produto', 'mensagem']);
    }

    public function edit($id) {
        $this->request->allowMethod(['patch', 'put']);
        $produto = $this->Produtos->get($id);
        $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
        if ($this->Produtos->save($produto)) {
            $mensagem = 'Salvo';
        } else {
            $mensagem = 'Erro';
        }
        $this->set([
            'mensagem' => $mensagem,
            'produto' => $produto,
        ]);
        $this->viewBuilder()->setOption('serialize', ['produto', 'mensagem']);
    }

    public function delete($id) {
        $this->request->allowMethod(['delete']);
        $produto = $this->Produtos->get($id);
        $mensagem = 'Excluído';
        if (!$this->Produtos->delete($produto)) {
            $mensagem = 'Error';
        }
        $this->set('mensagem', $mensagem);
        $this->viewBuilder()->setOption('serialize', ['mensagem']);
    }

}