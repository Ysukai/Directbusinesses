<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntreprisesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntreprisesTable Test Case
 */
class EntreprisesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntreprisesTable
     */
    public $Entreprises;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entreprises',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Entreprises') ? [] : ['className' => 'App\Model\Table\EntreprisesTable'];
        $this->Entreprises = TableRegistry::get('Entreprises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entreprises);

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
