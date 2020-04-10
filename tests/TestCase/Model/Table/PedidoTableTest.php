<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidoTable Test Case
 */
class PedidoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidoTable
     */
    protected $Pedido;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pedido',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pedido') ? [] : ['className' => PedidoTable::class];
        $this->Pedido = TableRegistry::getTableLocator()->get('Pedido', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pedido);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
