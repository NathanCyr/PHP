<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parts Model
 *
 * @property \App\Model\Table\CarsTable|\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\ParentPartsTable|\Cake\ORM\Association\BelongsTo $ParentParts
 * @property \App\Model\Table\SuppliersTable|\Cake\ORM\Association\BelongsTo $Suppliers
 *
 * @method \App\Model\Entity\Part get($primaryKey, $options = [])
 * @method \App\Model\Entity\Part newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Part[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Part|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Part|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Part patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Part[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Part findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartsTable extends Table
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

        $this->setTable('parts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cars', [
            'foreignKey' => 'car_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentParts', [
            'foreignKey' => 'parent_part_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Suppliers', [
            'foreignKey' => 'supplier_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('part_level_code')
            ->requirePresence('part_level_code', 'create')
            ->notEmpty('part_level_code');

        $validator
            ->integer('part_manufacturer_code')
            ->requirePresence('part_manufacturer_code', 'create')
            ->notEmpty('part_manufacturer_code');

        $validator
            ->integer('part_type_code')
            ->requirePresence('part_type_code', 'create')
            ->notEmpty('part_type_code');

        $validator
            ->scalar('part_name')
            ->maxLength('part_name', 255)
            ->requirePresence('part_name', 'create')
            ->notEmpty('part_name');

        $validator
            ->integer('weight')
            ->requirePresence('weight', 'create')
            ->notEmpty('weight');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['car_id'], 'Cars'));
        $rules->add($rules->existsIn(['parent_part_id'], 'ParentParts'));
        $rules->add($rules->existsIn(['supplier_id'], 'Suppliers'));

        return $rules;
    }
}
