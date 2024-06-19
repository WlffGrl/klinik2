<?php
$this->breadcrumbs=array(
    'Obat'=>array('index'),
    'Create',
);


?>

<h1>Create Obat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
