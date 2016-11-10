<?php
/* @var $this DatasensorController */
/* @var $model Datasensor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datasensor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_alat'); ?>
		<?php echo $form->textField($model,'id_alat',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'id_alat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suhu'); ?>
		<?php echo $form->textField($model,'suhu'); ?>
		<?php echo $form->error($model,'suhu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ph'); ?>
		<?php echo $form->textField($model,'ph'); ?>
		<?php echo $form->error($model,'ph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'do'); ?>
		<?php echo $form->textField($model,'do'); ?>
		<?php echo $form->error($model,'do'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil'); ?>
		<?php echo $form->textField($model,'hasil'); ?>
		<?php echo $form->error($model,'hasil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
		<?php echo $form->error($model,'create_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->