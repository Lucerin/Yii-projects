<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Sala <?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidad')); ?>:</b>
	<?php echo CHtml::encode($data->capacidad); ?>
	<br />


</div></div>