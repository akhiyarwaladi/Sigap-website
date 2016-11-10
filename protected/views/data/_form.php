<?php
/* @var $this DataController */
/* @var $model Data */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'id_data'); ?>
		<?php // echo $form->textField($model,'id_data'); ?>
		<?php //echo $form->error($model,'id_data'); ?>
	 <!-- </div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'id_alat'); ?>
		<?php echo $form->textField($model,'id_alat'); ?>
		<?php echo $form->error($model,'id_alat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ph'); ?>
		<?php echo $form->textField($model,'ph',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'do'); ?>
		<?php echo $form->textField($model,'do',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'do'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suhu'); ?>
		<?php echo $form->textField($model,'suhu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'suhu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'waktu'); ?>
		<?php //echo $form->textField($model,'waktu'); ?>
		<?php //echo $form->error($model,'waktu'); ?>
	<!-- </div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->