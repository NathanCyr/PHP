<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarsFixture
 *
 */
class CarsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'car_manufacturer_code' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        'car_year_of_manufacture' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        'model' => ['type' => 'string', 'length' => 765, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'other_car_details' => ['type' => 'string', 'length' => 765, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        '_indexes' => [
            'car_manufacturer_code_2' => ['type' => 'index', 'columns' => ['car_manufacturer_code'], 'length' => []],
            'car_manufacturer_code' => ['type' => 'index', 'columns' => ['car_manufacturer_code'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_fk' => ['type' => 'foreign', 'columns' => ['id'], 'references' => ['cars_files', 'car_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'car_manufacturer_code' => 1,
                'car_year_of_manufacture' => 1,
                'model' => 'Lorem ipsum dolor sit amet',
                'other_car_details' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-11-13 20:13:09',
                'modified' => '2018-11-13 20:13:09'
            ],
        ];
        parent::init();
    }
}
