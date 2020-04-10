<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PedidoItem $pedidoItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pedido Item'), ['action' => 'edit', $pedidoItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedido Item'), ['action' => 'delete', $pedidoItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedido Item'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedido Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidoItem view content">
            <h3><?= h($pedidoItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pedidoItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pedido') ?></th>
                    <td><?= $this->Number->format($pedidoItem->id_pedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produto') ?></th>
                    <td><?= $this->Number->format($pedidoItem->id_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($pedidoItem->quantidade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
