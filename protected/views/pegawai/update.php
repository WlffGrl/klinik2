<?php
$this->breadcrumbs=array(
    'Pegawai'=>array('index'),
    $model->nama=>array('view','id'=>$model->pegawai_id),
    'Update',
);


?>

<h1>Update Pegawai <?php echo $model->pegawai_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
