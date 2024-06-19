<?php
$this->breadcrumbs=array(
    'Wilayah',
);


?>

<h1>Wilayah</h1>

<div class="row buttons">
    <?php echo CHtml::link('Create', array('create')); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'nama',
        'provinsi',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
