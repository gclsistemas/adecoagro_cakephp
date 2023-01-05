<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedores view large-9 medium-8 columns content">
    <h3><?= h($proveedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($proveedor->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= h($proveedor->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuit') ?></th>
            <td><?= h($proveedor->cuit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($proveedor->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($proveedor->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($proveedor->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calificacion') ?></th>
            <td><?= $this->Number->format($proveedor->calificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($proveedor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($proveedor->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($proveedor->direccion)); ?>
    </div>
</div>
