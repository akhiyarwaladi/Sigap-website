<?php
/* @var $this DatasensorController */
/* @var $data Datasensor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alat')); ?>:</b>
	<?php echo CHtml::encode($data->id_alat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suhu')); ?>:</b>
	<?php echo CHtml::encode($data->suhu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ph')); ?>:</b>
	<?php echo CHtml::encode($data->ph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('do')); ?>:</b>
	<?php echo CHtml::encode($data->do); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil')); ?>:</b>
	<?php echo CHtml::encode($data->hasil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	*/ ?>

</div>