<?php
/* @var $this DaftarAlatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Alats',
);

$this->menu=array(
	array('label'=>'Create DaftarAlat', 'url'=>array('create')),
	array('label'=>'Manage DaftarAlat', 'url'=>array('admin')),
);
?>

<h1>Daftar Alats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
