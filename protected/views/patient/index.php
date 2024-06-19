<?php
$this->breadcrumbs=array(
    'Patients',
);


?>

<h1>Patients</h1>

<div class="row buttons">
    <?php echo CHtml::link('Create', array('create')); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'patient-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'patient_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'contact_number',
        'address',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
        ),
    ),
)); ?>
