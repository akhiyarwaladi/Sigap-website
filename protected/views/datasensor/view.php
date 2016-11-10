<?php
/* @var $this DatasensorController */
/* @var $model Datasensor */

$this->breadcrumbs=array(
	'Datasensors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Datasensor', 'url'=>array('index')),
	array('label'=>'Create Datasensor', 'url'=>array('create')),
	array('label'=>'Update Datasensor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Datasensor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datasensor', 'url'=>array('admin')),
);
?>

<h1>View Datasensor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_alat',
		'suhu',
		'ph',
		'do',
		'hasil',
		'status',
		'create_at',
	),
)); ?>
<?php echo CHtml::link('Link Text',array('controller/action',
'param1'=>'value1')); ?>
<?php echo CHtml::button('Register', array('submit' => array('site/register'))); ?>