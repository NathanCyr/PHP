<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RefPartManufacturer Entity
 *
 * @property int $id
 * @property string $part_manufacturer_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class RefPartManufacturer extends Entity
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
        'part_manufacturer_name' => true,
        'created' => true,
        'modified' => true
    ];
}
