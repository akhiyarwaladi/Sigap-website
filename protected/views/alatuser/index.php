<?php
/* @var $this AlatuserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alatusers',
);

$this->menu=array(
	array('label'=>'Create Alatuser', 'url'=>array('create')),
	array('label'=>'Manage Alatuser', 'url'=>array('admin')),
);
?>

<h1>Alatusers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
