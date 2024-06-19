<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'obat-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'nama'); ?>
        <?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'jenis'); ?>
        <?php echo $form->textField($model,'jenis',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'jenis'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'harga'); ?>
        <?php echo $form->textField($model,'harga'); ?>
        <?php echo $form->error($model,'harga'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'stok'); ?>
        <?php echo $form->textField($model,'stok'); ?>
        <?php echo $form->error($model,'stok'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'tanggal_kadaluarsa'); ?>
        <?php echo $form->textField($model,'tanggal_kadaluarsa'); ?>
        <?php echo $form->error($model,'tanggal_kadaluarsa'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
