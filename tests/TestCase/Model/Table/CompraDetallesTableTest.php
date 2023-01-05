<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraDetallesTable Test Case
 */
class CompraDetallesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraDetallesTable
     */
    public $CompraDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraDetalles',
        'app.Compras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraDetalles') ? [] : ['className' => CompraDetallesTable::class];
        $this->CompraDetalles = TableRegistry::getTableLocator()->get('CompraDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraDetalles);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
