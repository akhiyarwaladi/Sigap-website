<?php
/* @var $this DaftarAlatController */
/* @var $model DaftarAlat */

$this->breadcrumbs=array(
	'Daftar Alats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DaftarAlat', 'url'=>array('index')),
	array('label'=>'Create DaftarAlat', 'url'=>array('create')),
	array('label'=>'Update DaftarAlat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DaftarAlat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DaftarAlat', 'url'=>array('admin')),
);
?>

<h1>View DaftarAlat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode',
		'tanggal_produksi',
		'status',
		'registered_at',
	),
)); ?>
