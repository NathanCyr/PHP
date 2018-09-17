<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RefPartTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RefPartTypesTable Test Case
 */
class RefPartTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RefPartTypesTable
     */
    public $RefPartTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ref_part_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RefPartTypes') ? [] : ['className' => RefPartTypesTable::class];
        $this->RefPartTypes = TableRegistry::getTableLocator()->get('RefPartTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RefPartTypes);

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
}
