<?php
/* @var $this DaftarAlatController */
/* @var $model DaftarAlat */

$this->breadcrumbs=array(
	'Daftar Alats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DaftarAlat', 'url'=>array('index')),
	array('label'=>'Manage DaftarAlat', 'url'=>array('admin')),
);
?>

<h1>Create DaftarAlat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>