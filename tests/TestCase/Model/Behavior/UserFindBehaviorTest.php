<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\UserFindBehavior;
use Cake\TestSuite\TestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Model\Behavior\UserFindBehavior Test Case
 */
class UserFindBehaviorTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bookmarks',
        'app.users',
        'app.tags',
        'app.bookmarks_tags'
    ];

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
        $config = TableRegistry::exists('Bookmarks') ? [] : ['className' => 'App\Model\Table\BookmarksTable'];
        $this->Bookmarks = TableRegistry::get('Bookmarks', $config);
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

    public function testUsersFindBehavior()
    {

        $count= $this->Bookmarks->find('forUser', ['user_id'=>1])->count();
        $this->assertEquals(1, $count);
        $count= $this->Bookmarks->find('forUser', ['user_id'=>0])->count();
        $this->assertEquals(0, $count);
    }
}
