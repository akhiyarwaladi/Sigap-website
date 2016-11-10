<?php
/* @var $this DaftarAlatController */
/* @var $model DaftarAlat */

$this->breadcrumbs=array(
	'Daftar Alats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DaftarAlat', 'url'=>array('index')),
	array('label'=>'Create DaftarAlat', 'url'=>array('create')),
	array('label'=>'View DaftarAlat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DaftarAlat', 'url'=>array('admin')),
);
?>

<h1>Update DaftarAlat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>