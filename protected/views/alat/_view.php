<?php
/* @var $this AlatController */
/* @var $data Alat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_alat), array('view', 'id'=>$data->id_alat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::encode($data->kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_produksi')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_produksi); ?>
	<br />


</div>