<?php
/* @var $this AlatuserController */
/* @var $model Alatuser */

$this->breadcrumbs=array(
	'Alatusers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alatuser', 'url'=>array('index')),
	array('label'=>'Create Alatuser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alatuser-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alat</h1></br>

<!-- button -->
<?php echo CHtml::button('Register', array('onclick' => 'js:document.location.href="index.php?r=alatuser/create'.$model->id.'"')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alatuser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'id_alat',
		//'id_user',
		'nama',
		array(
                    'class'=>'CButtonColumn',
                    'template'=>'{delete}{update}{view}',
		),
	),
)); ?>
