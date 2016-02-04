<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'funcion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textAreaRow($model,'sinopsis',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->dropDownListRow($model,'categoria_id',CHtml::listData(Categoria::model()->findAll(),'id','nombre'),array('prompt'=>'Seleccione una Categoria','class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'clasificacion_id',CHtml::listData(Clasificacion::model()->findAll(),'id','nombre'),array('prompt'=>'Seleccione una Clasificacion','class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'estado',array('1'=>'Activo','0'=>'Desactivado'),array('class'=>'span5','prompt'=>'Seleccione una Estado')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Creaar' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
