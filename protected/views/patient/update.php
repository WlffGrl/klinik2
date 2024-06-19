<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    $model->first_name.' '.$model->last_name=>array('view','id'=>$model->patient_id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Patients', 'url'=>array('index')),
    array('label'=>'Create Patient', 'url'=>array('create')),
    array('label'=>'View Patient', 'url'=>array('view', 'id'=>$model->patient_id)),
    array('label'=>'Manage Patients', 'url'=>array('admin')),
);
?>

<h1>Update Patient <?php echo $model->first_name.' '.$model->last_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
