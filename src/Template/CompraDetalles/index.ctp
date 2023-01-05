<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraDetalle[]|\Cake\Collection\CollectionInterface $compraDetalles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compra Detalle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compraDetalles index large-9 medium-8 columns content">
    <h3><?= __('Compra Detalles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('compra_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compraDetalles as $compraDetalle): ?>
            <tr>
                <td><?= $this->Number->format($compraDetalle->id) ?></td>
                <td><?= $compraDetalle->has('compra') ? $this->Html->link($compraDetalle->compra->id, ['controller' => 'Compras', 'action' => 'view', $compraDetalle->compra->id]) : '' ?></td>
                <td><?= $this->Number->format($compraDetalle->cantidad) ?></td>
                <td><?= $this->Number->format($compraDetalle->precio) ?></td>
                <td><?= h($compraDetalle->created) ?></td>
                <td><?= h($compraDetalle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compraDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compraDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compraDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
