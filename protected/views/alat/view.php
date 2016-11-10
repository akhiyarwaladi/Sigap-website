<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	$model->id_alat,
);

$this->menu=array(
	array('label'=>'List Alat', 'url'=>array('index')),
	array('label'=>'Create Alat', 'url'=>array('create')),
	array('label'=>'Update Alat', 'url'=>array('update', 'id'=>$model->id_alat)),
	array('label'=>'Delete Alat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_alat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alat', 'url'=>array('admin')),
);
?>

<h1>View Alat #<?php echo $model->id_alat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_alat',
		'id_user',
		'kode',
		'keterangan',
		'tgl_produksi',
	),
)); ?>
