<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore[]|\Cake\Collection\CollectionInterface $proveedores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedores index large-9 medium-8 columns content">
    <h3><?= __('Proveedores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedores as $proveedore): ?>
            <tr>
                <td><?= $this->Number->format($proveedore->id) ?></td>
                <td><?= h($proveedore->nombre) ?></td>
                <td><?= h($proveedore->empresa) ?></td>
                <td><?= h($proveedore->cuit) ?></td>
                <td><?= h($proveedore->celular) ?></td>
                <td><?= h($proveedore->email) ?></td>
                <td><?= h($proveedore->telefono) ?></td>
                <td><?= $this->Number->format($proveedore->calificacion) ?></td>
                <td><?= h($proveedore->created) ?></td>
                <td><?= h($proveedore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proveedore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedore->id)]) ?>
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
