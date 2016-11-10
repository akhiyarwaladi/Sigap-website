<?php
/* @var $this DataController */
/* @var $model Data */

$this->breadcrumbs=array(
	'Datas'=>array('index'),
	$model->id_data,
);

$this->menu=array(
	array('label'=>'List Data', 'url'=>array('index')),
	array('label'=>'Create Data', 'url'=>array('create')),
	array('label'=>'Update Data', 'url'=>array('update', 'id'=>$model->id_data)),
	array('label'=>'Delete Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Data', 'url'=>array('admin')),
);
?>

<h1>View Data #<?php echo $model->id_data; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_data',
		'id_alat',
		'ph',
		'do',
		'suhu',
		'status',
		'waktu',
	),
)); 
// <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
// $this->Widget('ext.highcharts.HighchartsWidget', array(
//    'options' => array(
//       'title' => array('text' => 'pH'),
//       'xAxis' => array(
//          'categories' => array('pH')
//       ),
//       'yAxis' => array(
//          'title' => array('text' => 'pH')
//       ),
//       'series' => array(
//          array('username' => '', 'data' => array(1, 0, 4)),
//          array('username' => '', 'data' => array(5, 7, 3))
//       )
//    )
// ));
?>
