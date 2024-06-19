<?php
$this->breadcrumbs=array(
    'Pegawai'=>array('index'),
    $model->nama=>array('view','id'=>$model->pegawai_id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Pegawai', 'url'=>array('index')),
    array('label'=>'Create Pegawai', 'url'=>array('create')),
    array('label'=>'View Pegawai', 'url'=>array('view', 'id'=>$model->pegawai_id)),
    array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Update Pegawai <?php echo $model->pegawai_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
