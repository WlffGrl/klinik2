<?php
$this->breadcrumbs=array(
    'Obat'=>array('index'),
    $model->nama,
);


?>

<h1>View Obat #<?php echo $model->obat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'obat_id',
        'nama',
        'jenis',
        'harga',
        'stok',
        'tanggal_kadaluarsa',
    ),
)); ?>
