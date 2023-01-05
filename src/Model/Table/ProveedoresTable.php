<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedores Model
 *
 * @method \App\Model\Entity\Proveedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proveedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProveedoresTable extends Table
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

        $this->setTable('proveedores');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 150)
            ->allowEmptyString('empresa');

        $validator
            ->scalar('cuit')
            ->maxLength('cuit', 25)
            ->allowEmptyString('cuit');

        $validator
            ->scalar('direccion')
            ->allowEmptyString('direccion');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 50)
            ->allowEmptyString('celular');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 50)
            ->allowEmptyString('telefono');

        $validator
            ->allowEmptyString('calificacion');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
