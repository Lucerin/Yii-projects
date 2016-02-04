<h1>Update Countries #<?php echo $model->id?></h1>
<?php $form=$this->beginWidget("CActiveForm");?>

<b>Name</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>
<b>Status</b><br>
<?php echo $form->textField($model,"status");?>
<?php echo $form->error($model,"status");?>
<br>
<?php echo CHtml::submitButton("Actualizar",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>