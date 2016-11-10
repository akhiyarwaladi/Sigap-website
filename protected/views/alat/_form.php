<?php
/* @var $this AlatController */
/* @var $model Alat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'id_alat'); ?>
		<?php //echo $form->textField($model,'id_alat'); ?>
		<?php //echo $form->error($model,'id_alat'); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode'); ?>
		<?php echo $form->textField($model,'kode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'tgl_produksi'); ?>
		<?php //echo $form->textField($model,'tgl_produksi'); ?>
		<?php //echo $form->error($model,'tgl_produksi'); ?>
	<!-- </div> -->

	<div class='row'>
            <?php
            echo $form->labelEx($model, 'tgl_produksi');
            $this->widget('zii.widgets.jui.CJuiDatePicker', array('attribute' => 'tgl_produksi',
                'language' => 'id',
                'model' => $model,
                'options' => array(
                    'mode' => 'focus',
                    'dateFormat' => 'd MM yy',
                    'showAnim' => 'slideDown'),
                'htmlOptions' => array('size' => 30, 'class' => 'date')
                    )
            );
            echo $form->error($model, 'tanggal_terbit');
            ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->