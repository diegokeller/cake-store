<h1>Lista de Produtos</h1>
<?php foreach ($produtos as $item): ?>
    <h2>
        <?= $item->nome ?>
    </h2>
    <p>
        <?= $item->descricao ?>
    </p>
<?php endforeach; ?>