<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedores
 */
?>

<!-- Grilla de productos -->
<div class="row">
    <div class="col-12 col-md-12">
        <h3 class="display-4 text-center"><?= __('Proveedores') ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12">
        <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'btn btn-dark mb-1', 'escape' => false]) ?>
        <table id="tbl" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('cuit') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('calificacion') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedores as $proveedor): ?>
                    <tr>
                        <td class="actions">
                            <!--<?//= $this->Html->link(__('Ver'), ['action' => 'view', $proveedor->id]) ?>-->
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proveedor->id]) ?>
                            <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $proveedor->id],
                                ['confirm' => __('Está seguro de eliminar el proveedor # {0}?', $proveedor->id)]) ?>
                        </td>
                        <td><?= $this->Number->format($proveedor->id) ?></td>
                        <td><?= h($proveedor->nombre) ?></td>
                        <td><?= h($proveedor->empresa) ?></td>
                        <td><?= h($proveedor->cuit) ?></td>
                        <td><?= h($proveedor->celular) ?></td>
                        <td><?= h($proveedor->email) ?></td>
                        <td><?= h($proveedor->telefono) ?></td>
                        <!--<td><?/*= $this->Number->format($proveedor->calificacion) */?></td>-->
                        <!--<td><?/*= $proveedor->lista_calificacion()[$proveedor->calificacion] */?></td>-->
                        <td><?= [1 => 'Buena', 2 => 'Mala'][$proveedor->calificacion] ?></td>
                        <td><?= h($proveedor->created) ?></td>
                        <td><?= h($proveedor->modified) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
