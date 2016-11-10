<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alat', 'url'=>array('index')),
	array('label'=>'Manage Alat', 'url'=>array('admin')),
);
?>

<h1>Create Alat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>