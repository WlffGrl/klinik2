<?php
$this->breadcrumbs=array(
    'Appointments',
);

$this->menu=array(
    array('label'=>'Create Appointment', 'url'=>array('create')),
    array('label'=>'Manage Appointments', 'url'=>array('admin')),
);
?>

<h1>Appointments</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'appointment-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'patient_id',
        'appointment_date',
        array(
            'name' => 'doctor_id',
            'value' => '$data->doctor->username',
            'header' => 'Doctor Username',
        ),
        'reason',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
        ),
    ),
)); ?>
