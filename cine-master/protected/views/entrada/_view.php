

<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Pelicula <?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">


	<b><?php echo CHtml::encode($data->getAttributeLabel('num_asiento')); ?>:</b>
	<?php echo CHtml::encode($data->num_asiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sala_funcion_id')); ?>:</b>
	<?php echo CHtml::encode($data->sala_funcion_id); ?>
	<br />

	</div>
</div>


