<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraDetalle $compraDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compra Detalle'), ['action' => 'edit', $compraDetalle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compra Detalle'), ['action' => 'delete', $compraDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraDetalle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compra Detalles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra Detalle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compraDetalles view large-9 medium-8 columns content">
    <h3><?= h($compraDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Compra') ?></th>
            <td><?= $compraDetalle->has('compra') ? $this->Html->link($compraDetalle->compra->id, ['controller' => 'Compras', 'action' => 'view', $compraDetalle->compra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compraDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($compraDetalle->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($compraDetalle->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($compraDetalle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($compraDetalle->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($compraDetalle->descripcion)); ?>
    </div>
</div>
