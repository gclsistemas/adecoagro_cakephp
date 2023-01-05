<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedore Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $empresa
 * @property string|null $cuit
 * @property string|null $direccion
 * @property string|null $celular
 * @property string|null $email
 * @property string|null $telefono
 * @property int|null $calificacion
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Proveedor extends Entity
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
        'nombre' => true,
        'empresa' => true,
        'cuit' => true,
        'direccion' => true,
        'celular' => true,
        'email' => true,
        'telefono' => true,
        'calificacion' => true,
        'created' => true,
        'modified' => true,
    ];

//    protected $_virtual = ['literal_calificacion'];

    public function lista_calificacion() {
        return [
            1 => 'Buena',
            2 => 'Mala'
        ];
    }

//    protected function _getLiteralCalificacion()
//    {
////        return $this->calificacion;
//        return $this->lista_calificacion()[$this->calificacion];
//    }
//    public function literal_calificacion()
//    {
////        return $this->lista_calificacion()[$this->calificacion];
//        switch ($this->calificacion) {
//            case 1: return 'Buena';
//            case 2: return 'Mala';
//            default: return '';
//        }
//    }
}
