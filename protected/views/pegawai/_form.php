<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'pegawai-form',
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
        <?php echo $form->labelEx($model,'alamat'); ?>
        <?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'alamat'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'tanggal_lahir'); ?>
        <?php echo $form->textField($model,'tanggal_lahir'); ?>
        <?php echo $form->error($model,'tanggal_lahir'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'jabatan'); ?>
        <?php echo $form->textField($model,'jabatan',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'jabatan'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gaji'); ?>
        <?php echo $form->textField($model,'gaji'); ?>
        <?php echo $form->error($model,'gaji'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'tanggal_mulai_kerja'); ?>
        <?php echo $form->textField($model,'tanggal_mulai_kerja'); ?>
        <?php echo $form->error($model,'tanggal_mulai_kerja'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
