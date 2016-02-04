<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sNombre'); ?>
		<?php echo $form->textField($model,'sNombre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sApellido'); ?>
		<?php echo $form->textField($model,'sApellido',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sEmail'); ?>
		<?php echo $form->textField($model,'sEmail',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sPassword'); ?>
		<?php echo $form->textField($model,'sPassword',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bActivo'); ?>
		<?php echo $form->textField($model,'bActivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dUltimoLogin'); ?>
		<?php echo $form->textField($model,'dUltimoLogin',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idRol'); ?>
		<?php echo $form->textField($model,'idRol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->