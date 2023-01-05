<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompraDetalles Model
 *
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\BelongsTo $Compras
 *
 * @method \App\Model\Entity\CompraDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompraDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompraDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompraDetalle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraDetalle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompraDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompraDetalle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompraDetallesTable extends Table
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

        $this->setTable('compra_detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Compras', [
            'foreignKey' => 'compra_id',
            'joinType' => 'INNER',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->nonNegativeInteger('cantidad')
            ->notEmptyString('cantidad');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->numeric('precio')
            ->notEmptyString('precio');

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
        $rules->add($rules->existsIn(['compra_id'], 'Compras'));

        return $rules;
    }
}
