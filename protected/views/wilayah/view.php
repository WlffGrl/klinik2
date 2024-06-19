<?php
$this->breadcrumbs=array(
    'Wilayah'=>array('index'),
    $model->id,
);


?>

<h1>View Wilayah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'nama',
        'provinsi',
    ),
)); ?>
