<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    $model->first_name.' '.$model->last_name,
);


?>

<h1>Patient : <?php echo $model->first_name.' '.$model->last_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'patient_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'contact_number',
        'address',
    ),
)); ?>

<div class="row buttons">
    <?php echo CHtml::link('Update', array('update', 'id'=>$model->patient_id), array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::link('Delete', '#', array(
        'submit'=>array('delete','id'=>$model->patient_id),
        'confirm'=>'Are you sure you want to delete this item?',
        'class'=>'btn btn-danger'
    )); ?>
</div>



