<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\UserFindBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\UserFindBehavior Test Case
 */
class UserFindBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\UserFindBehavior
     */
    public $UserFind;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->UserFind = new UserFindBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserFind);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
