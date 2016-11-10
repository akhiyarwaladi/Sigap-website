<?php
/* @var $this AlatuserController */
/* @var $model Alatuser */

$this->breadcrumbs=array(
	'Alatusers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alatuser', 'url'=>array('index')),
	array('label'=>'Create Alatuser', 'url'=>array('create')),
	array('label'=>'View Alatuser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alatuser', 'url'=>array('admin')),
);
?>

<h1>Update Alatuser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_formupdate', array('model'=>$model)); ?>