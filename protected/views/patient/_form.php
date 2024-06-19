<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'patient-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'first_name'); ?>
        <?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'first_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'last_name'); ?>
        <?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'last_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date_of_birth'); ?>
        <?php echo $form->textField($model,'date_of_birth'); ?>
        <?php echo $form->error($model,'date_of_birth'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gender'); ?>
        <?php echo $form->dropDownList($model,'gender',array('male'=>'Male', 'female'=>'Female', 'other'=>'Other')); ?>
        <?php echo $form->error($model,'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'contact_number'); ?>
        <?php echo $form->textField($model,'contact_number',array('size'=>15,'maxlength'=>15)); ?>
        <?php echo $form->error($model,'contact_number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'address'); ?>
        <?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'address'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
