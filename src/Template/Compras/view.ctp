<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compra'), ['action' => 'edit', $compra->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compra'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compra Detalles'), ['controller' => 'CompraDetalles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra Detalle'), ['controller' => 'CompraDetalles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compras view large-9 medium-8 columns content">
    <h3><?= h($compra->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compra->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor Id') ?></th>
            <td><?= $this->Number->format($compra->proveedor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($compra->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($compra->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($compra->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Compra Detalles') ?></h4>
        <?php if (!empty($compra->compra_detalles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Compra Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($compra->compra_detalles as $compraDetalles): ?>
            <tr>
                <td><?= h($compraDetalles->id) ?></td>
                <td><?= h($compraDetalles->compra_id) ?></td>
                <td><?= h($compraDetalles->cantidad) ?></td>
                <td><?= h($compraDetalles->descripcion) ?></td>
                <td><?= h($compraDetalles->precio) ?></td>
                <td><?= h($compraDetalles->created) ?></td>
                <td><?= h($compraDetalles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompraDetalles', 'action' => 'view', $compraDetalles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompraDetalles', 'action' => 'edit', $compraDetalles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompraDetalles', 'action' => 'delete', $compraDetalles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraDetalles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
