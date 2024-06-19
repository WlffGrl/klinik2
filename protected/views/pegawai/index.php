<?php
$this->breadcrumbs=array(
    'Pegawai',
);

$this->menu=array(
    array('label'=>'Create Pegawai', 'url'=>array('create')),
    array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Pegawai</h1>

<div class="row buttons">
    <?php echo CHtml::link('Create', array('create')); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'pegawai-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'pegawai_id',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jabatan',
        'gaji',
        'tanggal_mulai_kerja',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
