<?php
/* @var $this DatasensorController */
/* @var $model Datasensor */

$this->breadcrumbs=array(
	'Datasensors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Datasensor', 'url'=>array('index')),
	array('label'=>'Manage Datasensor', 'url'=>array('admin')),
);
?>

<h1>Create Datasensor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>