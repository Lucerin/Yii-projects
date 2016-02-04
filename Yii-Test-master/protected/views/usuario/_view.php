<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuario), array('view', 'id'=>$data->idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sNombre')); ?>:</b>
	<?php echo CHtml::encode($data->sNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sApellido')); ?>:</b>
	<?php echo CHtml::encode($data->sApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sEmail')); ?>:</b>
	<?php echo CHtml::encode($data->sEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sPassword')); ?>:</b>
	<?php echo CHtml::encode($data->sPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bActivo')); ?>:</b>
	<?php echo CHtml::encode($data->bActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dUltimoLogin')); ?>:</b>
	<?php echo CHtml::encode($data->dUltimoLogin); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idRol')); ?>:</b>
	<?php echo CHtml::encode($data->idRol); ?>
	<br />

	*/ ?>

</div>