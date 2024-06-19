<?php
$this->breadcrumbs=array(
    'Obat'=>array('index'),
    $model->nama=>array('view','id'=>$model->obat_id),
    'Update',
);


?>

<h1>Update Obat <?php echo $model->obat_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
