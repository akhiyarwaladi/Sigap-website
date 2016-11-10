<?php
/* @var $this DatasensorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datasensors',
);

$this->menu=array(
	array('label'=>'Create Datasensor', 'url'=>array('create')),
	array('label'=>'Manage Datasensor', 'url'=>array('admin')),
);
?>

<h1>Datasensors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
