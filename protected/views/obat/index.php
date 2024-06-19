<?php
$this->breadcrumbs=array(
    'Obat',
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
