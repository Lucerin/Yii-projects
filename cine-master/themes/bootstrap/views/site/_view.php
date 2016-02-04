

<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Pelicula <?php echo CHtml::link(CHtml::encode($data->nombre),array('../funcion/view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">



	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('sinopsis')); ?>:</b>
	<?php echo CHtml::encode($data->sinopsis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clasificacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->clasificacion->nombre); ?>
	<br />

	<center>

		<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('../funcion/'.$data->id); ?>"> Ver detalle</a>

	</center>

	<br>


	</div>
</div>









