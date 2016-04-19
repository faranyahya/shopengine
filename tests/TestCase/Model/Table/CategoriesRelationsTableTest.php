<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriesRelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriesRelationsTable Test Case
 */
class CategoriesRelationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriesRelationsTable
     */
    public $CategoriesRelations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categories_relations',
        'app.categories',
        'app.parent_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriesRelations') ? [] : ['className' => 'App\Model\Table\CategoriesRelationsTable'];
        $this->CategoriesRelations = TableRegistry::get('CategoriesRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriesRelations);

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
