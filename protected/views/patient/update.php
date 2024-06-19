<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    $model->first_name.' '.$model->last_name=>array('view','id'=>$model->patient_id),
    'Update',
);

?>

<h1>Update Patient <?php echo $model->first_name.' '.$model->last_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
