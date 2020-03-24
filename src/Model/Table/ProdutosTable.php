<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProdutosTable extends Table {

    public function initialize(array $config): void {
        $this->setTable('produto');
    }

}

