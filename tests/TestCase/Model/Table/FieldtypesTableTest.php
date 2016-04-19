<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FieldtypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FieldtypesTable Test Case
 */
class FieldtypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FieldtypesTable
     */
    public $Fieldtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fieldtypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fieldtypes') ? [] : ['className' => 'App\Model\Table\FieldtypesTable'];
        $this->Fieldtypes = TableRegistry::get('Fieldtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fieldtypes);

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
