<?php
/* @var $this DataController */
/* @var $data Data */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_data')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data), array('view', 'id'=>$data->id_data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alat')); ?>:</b>
	<?php echo CHtml::encode($data->id_alat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ph')); ?>:</b>
	<?php echo CHtml::encode($data->ph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('do')); ?>:</b>
	<?php echo CHtml::encode($data->do); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suhu')); ?>:</b>
	<?php echo CHtml::encode($data->suhu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />


</div>
