<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppsTable Test Case
 */
class AppsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppsTable
     */
    public $Apps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.apps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Apps') ? [] : ['className' => 'App\Model\Table\AppsTable'];
        $this->Apps = TableRegistry::get('Apps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Apps);

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
