<?php
$this->breadcrumbs=array(
    'Obat',
);

$this->menu=array(
    array('label'=>'Create Obat', 'url'=>array('create')),
    array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Obat</h1>

<div class="row buttons">
    <?php echo CHtml::link('Create', array('create')); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'obat-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'obat_id',
        'nama',
        'jenis',
        'harga',
        'stok',
        'tanggal_kadaluarsa',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
