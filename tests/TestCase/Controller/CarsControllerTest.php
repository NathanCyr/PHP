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

    public function testView(){
        $this->session($this->AuthAdmin);
        $this->get('/cars/view/1');
        $this->assertResponseContains("Premier test");
        $this->assertResponseOk();
    }

    public function testAdd(){
        $this->session($this->AuthAdmin);
        $this->get('/cars/add');
        $this->assertResponseOK();
        $data = [
            'id' => 2,
            'car_manufacturer_code' => 2,
            'car_year_of_manufacture' => 2222,
            'model' => 'Ford Fusion',
            'other_car_details' => 'SEL I4',
            'created' => 'null',
            'modified' => 'null'
        ];
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post("/cars/add", $data);
        $this->assertResponseSuccess();
        $query = $this->Cars->find('all', ['conditions' => ['Cars.id' => $data['id']]]);
        $this->assertNotEmpty($query);

    }

    public function testEdit(){
        $this->session($this->AuthAdmin);
        $nameTest = 'Ceci est un test';
        $car = $this->Cars->find('all')->first();
        $car->name = $nameTest;
        $carId = $car->id;
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/cars/edit' . $carId, $car->toArray());
        $this->assertResponseSuccess();
        $query = $this->Cars->find('all', ['conditions' => ['Cars.id' => $carId]])->first();
        $this->assertEquals($nameTest, $query->name);
        }

    public function testDelete(){
        $this->session($this->AuthAdmin);
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->delete('cars/delete/1');
        $this->assertResponseSuccess();
        $query = $this->Cars->find('all', ['conditions' => ['Cars.id' => 1]])->first();
        $this->assertEmpty($query);
    }
}
