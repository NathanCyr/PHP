<?php
use Migrations\AbstractSeed;

/**
 * CarsFiles seed.
 */
class CarsFilesSeed extends AbstractSeed
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
                'file_id' => '2',
                'car_id' => '3',
            ],
            [
                'file_id' => '1',
                'car_id' => '4',
            ],
            [
                'file_id' => '3',
                'car_id' => '5',
            ],
        ];

        $table = $this->table('cars_files');
        $table->insert($data)->save();
    }
}
