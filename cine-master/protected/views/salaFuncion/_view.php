<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Sala Funcion  <?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">


	<b><?php echo CHtml::encode($data->getAttributeLabel('funcion_id')); ?>:</b>
	<?php echo CHtml::encode($data->funcion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sala_id')); ?>:</b>
	<?php echo CHtml::encode($data->sala_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idioma_id')); ?>:</b>
	<?php echo CHtml::encode($data->idioma_id); ?>
	<br />


</div></div>