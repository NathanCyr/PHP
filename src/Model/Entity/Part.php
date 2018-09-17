<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Part Entity
 *
 * @property int $id
 * @property int $car_id
 * @property int $parent_part_id
 * @property int $part_level_code
 * @property int $part_manufacturer_code
 * @property int $part_type_code
 * @property int $supplier_id
 * @property string $part_name
 * @property int $weight
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\ParentPart $parent_part
 * @property \App\Model\Entity\Supplier $supplier
 */
class Part extends Entity
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
        'car_id' => true,
        'parent_part_id' => true,
        'part_level_code' => true,
        'part_manufacturer_code' => true,
        'part_type_code' => true,
        'supplier_id' => true,
        'part_name' => true,
        'weight' => true,
        'created' => true,
        'modified' => true,
        'car' => true,
        'parent_part' => true,
        'supplier' => true
    ];
}
