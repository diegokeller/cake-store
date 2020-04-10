<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidoItem Model
 *
 * @method \App\Model\Entity\PedidoItem newEmptyEntity()
 * @method \App\Model\Entity\PedidoItem newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PedidoItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidoItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidoItem findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PedidoItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidoItem[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidoItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidoItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidoItem[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PedidoItem[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PedidoItem[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PedidoItem[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PedidoItemTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pedido_item');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pedido')
            ->setForeignKey('id_pedido')
            ->setProperty('pedido');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->nonNegativeInteger('id_pedido')
            ->requirePresence('id_pedido', 'create')
            ->notEmptyString('id_pedido');

        $validator
            ->nonNegativeInteger('id_produto')
            ->requirePresence('id_produto', 'create')
            ->notEmptyString('id_produto');

        $validator
            ->nonNegativeInteger('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        return $validator;
    }
}
