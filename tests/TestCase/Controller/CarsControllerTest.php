<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CarsController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\CarsController Test Case
 */
class CarsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cars',
        'app.parts',
        'app.users'
    ];
    public function setUp()
    {
        parent::setUp();
        $this->Cars = TableRegistry::get('Cars');
        $UsersTable = TableRegistry::get('users');
        $user = $UsersTable->find('all', ['conditions' => ['users.role' => 'admin']])->first()->toArray();
        $this->AuthAdmin = [
            'Auth' => [
                'User' => $user
            ]
        ];
    }
	
	public function tearDown()
    {
        unset($this->AuthAdmin);
        parent::tearDown();
    }

    public function testIndex()
    {
        $this->session($this->AuthAdmin);
        $this->get('/cars');
        $this->assertResponseOk();
    }
}
