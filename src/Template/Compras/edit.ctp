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
                <table id="tbl_compras_detalle_delete" class="table table-striped" style="display: none;">
                    <tbody>
                    </tbody>
                </table>
                <table id="tbl_compras_detalle" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"><?= __('Cantidad') ?></th>
                        <th scope="col"><?= __('Descripcion') ?></th>
                        <th scope="col"><?= __('Precio') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $index = 0; ?>
                        <?php foreach ($compraDetalles as $compraDetalle): ?>
                            <tr>
                                <td>
                                    <input type="hidden" name="detalle[<?= $index ?>][id]" value="<?= $compraDetalle->id ?>">
                                    <?= $this->Form->control('detalle[' . $index . '][cantidad]', ['type' => 'number', 'value' => $compraDetalle->cantidad,
                                        'class' => 'form-control', 'label' => false, 'min' => '0', 'step' => '1',
                                        'onchange' => 'if (parseInt(this.value) === 0) { delete_row_compra_detalle(this.parentNode.parentNode.parentNode.rowIndex,  
                                        $(this).parent().parent().children()[0].value); }']) ?>
                                </td>
                                <td>
                                    <?= $this->Form->control('detalle[' . $index . '][descripcion]', ['type' => 'text', 'value' => $compraDetalle->descripcion,
                                        'class' => 'form-control', 'label' => false]) ?>
                                </td>
                                <td>
                                    <?= $this->Form->control('detalle[' . $index . '][precio]', ['type' => 'text', 'value' => $compraDetalle->precio,
                                        'class' => 'form-control', 'label' => false]) ?>
                                </td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-dark']) ?>
        <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-dark ml-1', 'escape' => false]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<?php $this->Html->scriptStart(['block' => true]); ?>
var index = <?= $index; ?>
<?php $this->Html->scriptEnd(); ?>
<?= $this->Html->script('compras.js', ['block' => 'script']) ?>
