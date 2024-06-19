<?php
$this->breadcrumbs=array(
    'Pegawai'=>array('index'),
    $model->nama,
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
