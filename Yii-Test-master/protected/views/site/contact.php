<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contactanos';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<h1>Contáctenos</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Si tiene consultas comerciales u otras preguntas, por favor, complete el siguiente formulario para contactarse con nosotros. Gracias.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son necesarios.</p>

	<?php echo $form->errorSummary($model, null, null, array("class"=>"alert alert-error")); ?>

	<div class="span6">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>

		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="span6">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="span12">
		<?php if(CCaptcha::checkRequirements()): ?>
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			<div class="hint">Por favor, introduzca las letras que se muestran en la imagen de arriba.
			<br/>Las letras no son case-sensitive.</div>
			<?php echo $form->error($model,'verifyCode'); ?>
		<?php endif; ?>

		<?php echo CHtml::submitButton('Suscribirse', array("class"=>"btn btn-inverse btn-large")); ?>
	</div>

	<?php $this->endWidget(); ?>

<?php endif; ?>

</div><!-- form -->