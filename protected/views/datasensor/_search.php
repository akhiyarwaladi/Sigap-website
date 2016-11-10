<?php
/* @var $this DatasensorController */
/* @var $model Datasensor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_alat'); ?>
		<?php echo $form->textField($model,'id_alat',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suhu'); ?>
		<?php echo $form->textField($model,'suhu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ph'); ?>
		<?php echo $form->textField($model,'ph'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'do'); ?>
		<?php echo $form->textField($model,'do'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil'); ?>
		<?php echo $form->textField($model,'hasil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->