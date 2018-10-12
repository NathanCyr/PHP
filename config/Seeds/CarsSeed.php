<?php
use Migrations\AbstractSeed;

/**
 * Cars seed.
 */
class CarsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '3',
                'car_manufacturer_code' => '3',
                'car_year_of_manufacture' => '2010',
                'model' => 'WRX',
                'other_car_details' => 'STI',
                'created' => '2018-09-17 17:22:31',
                'modified' => '2018-09-17 17:22:31',
            ],
            [
                'id' => '4',
                'car_manufacturer_code' => '55',
                'car_year_of_manufacture' => '2222',
                'model' => 'erwer',
                'other_car_details' => 'werwerwer',
                'created' => '2018-09-17 17:23:21',
                'modified' => '2018-09-17 17:23:21',
            ],
            [
                'id' => '5',
                'car_manufacturer_code' => '5',
                'car_year_of_manufacture' => '2555',
                'model' => 'wrx',
                'other_car_details' => '',
                'created' => '2018-10-11 17:48:44',
                'modified' => '2018-10-11 17:48:44',
            ],
        ];

        $table = $this->table('cars');
        $table->insert($data)->save();
    }
}
