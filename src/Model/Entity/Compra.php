<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compra Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int|null $proveedor_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Proveedor $proveedor
 * @property \App\Model\Entity\CompraDetalle[] $compra_detalles
 */
class Compra extends Entity
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
        'fecha' => true,
        'proveedor_id' => true,
        'created' => true,
        'modified' => true,
        'proveedor' => true,
        'compra_detalles' => true,
    ];
}
