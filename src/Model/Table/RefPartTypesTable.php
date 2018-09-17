<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RefPartTypes Model
 *
 * @method \App\Model\Entity\RefPartType get($primaryKey, $options = [])
 * @method \App\Model\Entity\RefPartType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RefPartType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RefPartType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefPartType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefPartType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RefPartType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RefPartType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RefPartTypesTable extends Table
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

        $this->setTable('ref_part_types');
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
            ->scalar('part_type_description')
            ->maxLength('part_type_description', 255)
            ->requirePresence('part_type_description', 'create')
            ->notEmpty('part_type_description');

        return $validator;
    }
}
