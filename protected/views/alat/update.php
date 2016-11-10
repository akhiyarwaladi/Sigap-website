<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	$model->id_alat=>array('view','id'=>$model->id_alat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alat', 'url'=>array('index')),
	array('label'=>'Create Alat', 'url'=>array('create')),
	array('label'=>'View Alat', 'url'=>array('view', 'id'=>$model->id_alat)),
	array('label'=>'Manage Alat', 'url'=>array('admin')),
);
?>

<h1>Update Alat <?php echo $model->id_alat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>