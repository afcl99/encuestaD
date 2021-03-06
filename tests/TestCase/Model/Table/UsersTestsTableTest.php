<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTestsTable Test Case
 */
class UsersTestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTestsTable
     */
    protected $UsersTests;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UsersTests',
        'app.Users',
        'app.Tests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersTests') ? [] : ['className' => UsersTestsTable::class];
        $this->UsersTests = TableRegistry::getTableLocator()->get('UsersTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsersTests);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
