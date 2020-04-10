<?php

namespace App\Controller;

class PedidosController extends AppController {

    public function initialize(): void {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('Pedido');
        $this->loadModel('PedidoItem');
    }

    public function index() {
        $pedidos = $this->Pedido->find()->toList();        
        $this->set(compact('pedidos'));
        $this->viewBuilder()->setOption('serialize', ['pedidos']);
    }

    public function view($id) {
        $pedido = $this->Pedido->get($id, ['contain' => ['PedidoItem']]);
        $this->set(compact('pedido'));
        $this->viewBuilder()->setOption('serialize', ['pedido']);
    }

    public function add() {
        $this->request->allowMethod(['post']);
        $pedido = $this->Pedido->newEntity($this->request->getData());
        $pedido = $this->Pedido->saveOrFail($pedido);
        foreach ($this->request->getData()['itens'] as $item) {
            $item = $this->PedidoItem->newEntity($item);
            $item->id_pedido = $pedido->id;
            $this->PedidoItem->saveOrFail($item);
        }
        $this->set([
            'pedido' => $pedido,
        ]);
        $this->viewBuilder()->setOption('serialize', ['pedido', 'mensagem']);
    }

    public function delete($id) {
        $this->request->allowMethod(['delete']);
        $pedido = $this->Pedido->get($id, ['contain' => 'PedidoItem']);
        foreach ($pedido->itens as $item) {
            $this->PedidoItem->delete($item);
        }
        $mensagem = 'Excluído';
        if (!$this->Pedido->delete($pedido)) {
            $mensagem = 'Erro';
        }
        $this->set('mensagem', $mensagem);
        $this->viewBuilder()->setOption('serialize', ['mensagem']);
    }

}