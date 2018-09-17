<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property int $car_manufacturer_code
 * @property int $car_year_of_manufacture
 * @property string $model
 * @property string $other_car_details
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Part[] $parts
 */
class Car extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'car_manufacturer_code' => true,
        'car_year_of_manufacture' => true,
        'model' => true,
        'other_car_details' => true,
        'created' => true,
        'modified' => true,
        'parts' => true
    ];
}
