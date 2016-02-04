

<div class="bootstrap-widget bootstrap-widget-table">

    <div class="bootstrap-widget-header"><h3>Usuario <?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?> </h3></div>
    <div class="bootstrap-widget-content">




	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />



	<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'modal'.$data->id)); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Detalles del usuario</h4>
</div>
 
<div class="modal-body">
    		
</div>
 
<div class="modal-footer">
    
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',

        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>





	<center>

	<?php


	$this->widget('bootstrap.widgets.TbButton',array(
	
		'label'=>'Ver detalles',
		'icon'=>'icon-user',
		'type'=>'success',
		'size'=>'medium',
		'htmlOptions'=>array(
			 "data-toggle" => "modal".$data->id,
             "data-target" => "#modal".$data->id,

             'onclick'=>'cargarModalVer('.$data->id.',"user","'.Yii::app()->createAbsoluteUrl("").'")',

			),


		));





	?>



	</center>



	</div>
</div>






	