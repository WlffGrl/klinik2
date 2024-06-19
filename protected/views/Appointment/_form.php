<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'appointment-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'patient_id'); ?>
        <?php echo $form->textField($model,'patient_id'); ?>
        <?php echo $form->error($model,'patient_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'appointment_date'); ?>
        <?php echo $form->textField($model,'appointment_date'); ?>
        <?php echo $form->error($model,'appointment_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'doctor_id'); ?>
        <?php echo $form->textField($model,'doctor_id'); ?>
        <?php echo $form->error($model,'doctor_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'reason'); ?>
        <?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'reason'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
