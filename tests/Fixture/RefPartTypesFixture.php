<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RefPartTypesFixture
 *
 */
class RefPartTypesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'part_type_description' => ['type' => 'string', 'length' => 765, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'part_type_description' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-11-13 20:13:19',
                'modified' => '2018-11-13 20:13:19'
            ],
        ];
        parent::init();
    }
}
