<?php
/* @var $this AlatuserController */
/* @var $model Alatuser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alatuser-form',
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
		<?php echo $form->hiddenField($model,'id_user'); ?>
		<?php echo $form->hiddenField($model,'id_user',array('type'=>"hidden",'value'=>  Yii::app()->user->id)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->