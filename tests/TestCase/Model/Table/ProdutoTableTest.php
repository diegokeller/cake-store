<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutoTable Test Case
 */
class ProdutoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutoTable
     */
    protected $Produto;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Produto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Produto') ? [] : ['className' => ProdutoTable::class];
        $this->Produto = TableRegistry::getTableLocator()->get('Produto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Produto);

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
