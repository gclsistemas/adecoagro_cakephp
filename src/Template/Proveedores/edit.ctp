<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row justify-content-center">
    <div class="col-12 col-md-10">
        <?= $this->Form->create($proveedor, ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>']]) ?>
        <fieldset>
            <legend><?= __('Editación de Proveedor') ?></legend>
            <?php
            echo $this->Form->control('nombre', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('empresa', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('cuit', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('direccion', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('celular', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('email', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('telefono', ['class' => 'form-control', 'label' => ['class' => 'col-form-label']]);
            echo $this->Form->control('calificacion', ['type' => 'select', 'options' => ['1' => 'Buena', '2' => 'Mala'], 'class' => 'form-control', 'label' => ['class' =>
                'col-form-label']]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-dark']) ?>
        <?= $this->Html->link(__('Volver a Proveedores'), ['action' => 'index'], ['class' => 'btn btn-dark ml-1']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
