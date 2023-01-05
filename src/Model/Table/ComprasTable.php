<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compras Model
 *
 * @property \App\Model\Table\ProveedoresTable&\Cake\ORM\Association\BelongsTo $Proveedores
 * @property \App\Model\Table\CompraDetallesTable&\Cake\ORM\Association\HasMany $CompraDetalles
 *
 * @method \App\Model\Entity\Compra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Compra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Compra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Compra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compra findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComprasTable extends Table
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

        $this->setTable('compras');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proveedores', [
            'foreignKey' => 'proveedor_id',
        ]);
        $this->hasMany('CompraDetalles', [
            'foreignKey' => 'compra_id',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

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
        $rules->add($rules->existsIn(['proveedor_id'], 'proveedores'));

        return $rules;
    }
}
