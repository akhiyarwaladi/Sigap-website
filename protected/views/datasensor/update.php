<?php
/* @var $this DatasensorController */
/* @var $model Datasensor */

$this->breadcrumbs=array(
	'Datasensors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Datasensor', 'url'=>array('index')),
	array('label'=>'Create Datasensor', 'url'=>array('create')),
	array('label'=>'View Datasensor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Datasensor', 'url'=>array('admin')),
);
?>

<h1>Update Datasensor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>