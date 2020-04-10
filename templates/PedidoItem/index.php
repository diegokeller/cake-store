<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PedidoItem[]|\Cake\Collection\CollectionInterface $pedidoItem
 */
?>
<div class="pedidoItem index content">
    <?= $this->Html->link(__('New Pedido Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedido Item') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_pedido') ?></th>
                    <th><?= $this->Paginator->sort('id_produto') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidoItem as $pedidoItem): ?>
                <tr>
                    <td><?= $this->Number->format($pedidoItem->id) ?></td>
                    <td><?= $this->Number->format($pedidoItem->id_pedido) ?></td>
                    <td><?= $this->Number->format($pedidoItem->id_produto) ?></td>
                    <td><?= $this->Number->format($pedidoItem->quantidade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pedidoItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidoItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidoItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoItem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
