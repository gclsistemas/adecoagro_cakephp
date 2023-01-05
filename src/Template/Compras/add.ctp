<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 */
?>
<div class="row justify-content-center">
    <div class="col-12 col-md-10">
        <?= $this->Form->create($compra, ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>']]) ?>
        <fieldset>
            <legend><?= __('Nueva Compra') ?></legend>
            <?php
            echo $this->Form->control('fecha', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('proveedor_id', ['options' => $proveedores, 'class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            ?>
            <div class="form-group">
                <legend>
                    <?= __('Detalle') ?>
                    <?=
                    $this->Html->link('<i class="fa fa-plus"></i>', 'javascript:void(0);', ['class' => 'btn btn-dark mb-1', 'escape' => false,
                        'onclick' => 'add_row_compra_detalle();']);
                    ?>
                </legend>
                <table id="tbl_compras_detalle" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"><?= __('Cantidad') ?></th>
                        <th scope="col"><?= __('Descripcion') ?></th>
                        <th scope="col"><?= __('Precio') ?></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-dark']) ?>
        <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-dark ml-1', 'escape' => false]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<?= $this->Html->script('compras.js', ['block' => 'script']) ?>
