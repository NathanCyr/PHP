<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PartsFixture
 *
 */
class PartsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'car_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'parent_part_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'part_level_code' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'part_manufacturer_code' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'part_type_code' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'supplier_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'part_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'weight' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'car_id' => ['type' => 'index', 'columns' => ['car_id'], 'length' => []],
            'parent_part_id' => ['type' => 'index', 'columns' => ['parent_part_id'], 'length' => []],
            'part_level_code' => ['type' => 'index', 'columns' => ['part_level_code'], 'length' => []],
            'part_manufacturer_code' => ['type' => 'index', 'columns' => ['part_manufacturer_code'], 'length' => []],
            'part_type_code' => ['type' => 'index', 'columns' => ['part_type_code'], 'length' => []],
            'supplier_id' => ['type' => 'index', 'columns' => ['supplier_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'parts_ibfk_1' => ['type' => 'foreign', 'columns' => ['car_id'], 'references' => ['cars', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'parts_ibfk_2' => ['type' => 'foreign', 'columns' => ['supplier_id'], 'references' => ['suppliers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'parts_ibfk_3' => ['type' => 'foreign', 'columns' => ['part_type_code'], 'references' => ['ref_part_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'parts_ibfk_4' => ['type' => 'foreign', 'columns' => ['part_manufacturer_code'], 'references' => ['ref_part_manufacturers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
                'car_id' => 1,
                'parent_part_id' => 1,
                'part_level_code' => 1,
                'part_manufacturer_code' => 1,
                'part_type_code' => 1,
                'supplier_id' => 1,
                'part_name' => 'Lorem ipsum dolor sit amet',
                'weight' => 1,
                'created' => '2018-09-17 16:35:34',
                'modified' => '2018-09-17 16:35:34'
            ],
        ];
        parent::init();
    }
}
