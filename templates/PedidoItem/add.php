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
            <?= $this->Html->link(__('List Pedido Item'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidoItem form content">
            <?= $this->Form->create($pedidoItem) ?>
            <fieldset>
                <legend><?= __('Add Pedido Item') ?></legend>
                <?php
                    echo $this->Form->control('id_pedido');
                    echo $this->Form->control('id_produto');
                    echo $this->Form->control('quantidade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
