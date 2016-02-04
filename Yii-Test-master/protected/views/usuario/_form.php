<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span6">
			<?php echo $form->labelEx($model,'sNombre'); ?>
			<?php echo $form->textField($model,'sNombre',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'sNombre'); ?>

			<?php echo $form->labelEx($model,'sApellido'); ?>
			<?php echo $form->textField($model,'sApellido',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'sApellido'); ?>

			<?php echo $form->labelEx($model,'sEmail'); ?>
			<?php echo $form->textField($model,'sEmail',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'sEmail'); ?>

			<?php echo $form->labelEx($model,'sPassword'); ?>
			<?php echo $form->textField($model,'sPassword',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'sPassword'); ?>

			<?php echo $form->labelEx($model,'bActivo'); ?>
			<?php echo $form->textField($model,'bActivo'); ?>
			<?php echo $form->error($model,'bActivo'); ?>

			<?php echo $form->labelEx($model,'dUltimoLogin'); ?>
			<?php echo $form->textField($model,'dUltimoLogin',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'dUltimoLogin'); ?>

			<?php echo $form->labelEx($model,'idRol'); ?>
			<?php echo $form->textField($model,'idRol'); ?>
			<?php echo $form->error($model,'idRol'); ?>
		</div>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Garudar', array("class"=>"btn btn-inverse btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->