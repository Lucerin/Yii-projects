<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Funcion <?php echo CHtml::link(CHtml::encode($data->nombre),array('view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sinopsis')); ?>:</b>
	<?php echo CHtml::encode($data->sinopsis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clasificacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->clasificacion_id); ?>
	<br />


</div></div>