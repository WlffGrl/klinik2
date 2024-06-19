<?php
$this->breadcrumbs=array(
    'Obat'=>array('index'),
    $model->nama=>array('view','id'=>$model->obat_id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Obat', 'url'=>array('index')),
    array('label'=>'Create Obat', 'url'=>array('create')),
    array('label'=>'View Obat', 'url'=>array('view', 'id'=>$model->obat_id)),
    array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Update Obat <?php echo $model->obat_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
