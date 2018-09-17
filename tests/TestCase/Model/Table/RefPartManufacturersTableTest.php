<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RefPartManufacturersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RefPartManufacturersTable Test Case
 */
class RefPartManufacturersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RefPartManufacturersTable
     */
    public $RefPartManufacturers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ref_part_manufacturers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RefPartManufacturers') ? [] : ['className' => RefPartManufacturersTable::class];
        $this->RefPartManufacturers = TableRegistry::getTableLocator()->get('RefPartManufacturers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RefPartManufacturers);

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
