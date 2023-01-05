<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraDetalle $compraDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Compra Detalles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compraDetalles form large-9 medium-8 columns content">
    <?= $this->Form->create($compraDetalle) ?>
    <fieldset>
        <legend><?= __('Add Compra Detalle') ?></legend>
        <?php
            echo $this->Form->control('compra_id', ['options' => $compras]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('precio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
