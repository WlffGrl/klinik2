<?php
$this->breadcrumbs=array(
    'Pegawai'=>array('index'),
    $model->nama,
);

$this->menu=array(
    array('label'=>'List Pegawai', 'url'=>array('index')),
    array('label'=>'Create Pegawai', 'url'=>array('create')),
    array('label'=>'Update Pegawai', 'url'=>array('update', 'id'=>$model->pegawai_id)),
    array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pegawai_id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>View Pegawai #<?php echo $model->pegawai_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'pegawai_id',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jabatan',
        'gaji',
        'tanggal_mulai_kerja',
    ),
)); ?>
