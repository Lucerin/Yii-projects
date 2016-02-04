<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'entrada-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php //echo $idSalaFuncion; ?>
	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id)); ?>

	<?php 
		for($i=1; $i<=Entrada::model()->numAsientoSala($idSalaFuncion);$i++){
			$aux=0;
			foreach (Entrada::model()->listAsientoOcupado($idSalaFuncion) as $numAsiento) {
				if($numAsiento==$i)
					$aux=1;
			}
			if($aux==0){
				echo "<label class='checkbox' for='Entrada_num_asiento'>";
				echo "<input name='Asiento[".$i."]'type='checkBox' value='".$i."'>"; 
				echo "".$i."</label>";
			}
			if($i%10==0)
				echo "<br>";
		}

	?>

	<?php echo $form->hiddenField($model,'sala_funcion_id',array('value'=>$idSalaFuncion)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Comprar' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>


<script type="text/javascript">
	$(document).ready(function(){
		//$('.checkbox')
	});
</script>
