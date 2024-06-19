<?php
$this->breadcrumbs=array(
    'Appointments'=>array('index'),
    $model->appointment_id,
);

$this->menu=array(
    array('label'=>'List Appointments', 'url'=>array('index')),
    array('label'=>'Create Appointment', 'url'=>array('create')),
    array('label'=>'Update Appointment', 'url'=>array('update', 'id'=>$model->appointment_id)),
    array('label'=>'Delete Appointment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->appointment_id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Appointments', 'url'=>array('admin')),
);
?>

<h1>View Appointment #<?php echo $model->appointment_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'appointment_id',
        'patient_id',
        'appointment_date',
        'doctor_id',
        'reason',
    ),
)); ?>

<div class="row buttons">
    <?php echo CHtml::link('Update', array('update', 'id'=>$model->appointment_id), array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::link('Delete', '#', array(
        'submit'=>array('delete','id'=>$model->appointment_id),
        'confirm'=>'Are you sure you want to delete this item?',
        'class'=>'btn btn-danger'
    )); ?>
</div>
