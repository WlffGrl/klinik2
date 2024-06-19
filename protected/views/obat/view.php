<?php
$this->breadcrumbs=array(
    'Obat'=>array('index'),
    $model->nama,
);

$this->menu=array(
    array('label'=>'List Obat', 'url'=>array('index')),
    array('label'=>'Create Obat', 'url'=>array('create')),
    array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->obat_id)),
    array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obat_id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Obat', 'url'=>array('admin')),
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
