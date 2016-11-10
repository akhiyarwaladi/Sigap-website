<?php
/* @var $this AlatuserController */
/* @var $model Alatuser */

$this->breadcrumbs=array(
	'Alatusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alatuser', 'url'=>array('index')),
	array('label'=>'Manage Alatuser', 'url'=>array('admin')),
);
?>

<h1>Create Alat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>