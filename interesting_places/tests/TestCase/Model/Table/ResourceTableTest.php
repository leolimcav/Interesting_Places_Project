<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResourceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResourceTable Test Case
 */
class ResourceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResourceTable
     */
    public $Resource;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resource',
        'app.action',
        'app.controller',
        'app.privilege',
        'app.role'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resource') ? [] : ['className' => ResourceTable::class];
        $this->Resource = TableRegistry::get('Resource', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resource);

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
