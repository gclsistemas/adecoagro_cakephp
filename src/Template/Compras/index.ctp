<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra[]|\Cake\Collection\CollectionInterface $compras
 */
?>
<!-- Grilla de compras -->
<div class="row">
    <div class="col-12 col-md-12">
        <h3 class="display-4 text-center"><?= __('Compras') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($compras as $compra): ?>
                <tr>
                    <td class="actions">
                        <!--<?///*= $this->Html->link(__('View'), ['action' => 'view', $compra->id]) */?>-->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
                    </td>
                    <td><?= $this->Number->format($compra->id) ?></td>
                    <td><?= h($compra->fecha) ?></td>
                    <td><?= $this->Number->format($compra->proveedor_id) ?></td>
                    <td><?= h($compra->created) ?></td>
                    <td><?= h($compra->modified) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
