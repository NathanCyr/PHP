<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RefPartManufacturers Model
 *
 * @method \App\Model\Entity\RefPartManufacturer get($primaryKey, $options = [])
 * @method \App\Model\Entity\RefPartManufacturer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RefPartManufacturer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RefPartManufacturer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefPartManufacturer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefPartManufacturer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RefPartManufacturer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RefPartManufacturer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RefPartManufacturersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ref_part_manufacturers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('part_manufacturer_name')
            ->maxLength('part_manufacturer_name', 255)
            ->requirePresence('part_manufacturer_name', 'create')
            ->notEmpty('part_manufacturer_name');

        return $validator;
    }
}
