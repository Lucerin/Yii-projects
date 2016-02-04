<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="well">
	<center>
	<h2>Bievenido a SiteCine</h2>
	</center>
</div>



<h1>Cartelera</h1>

<br>

<div class="span6">
	<div class="well">
<center>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'cartelera-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>




	<?php echo $form->dropDownListRow($model,'categoria_id',CHtml::listData(Categoria::model()->findAll(),'id','nombre'),array('prompt'=>'Seleccione una Categoria','class'=>'span3')); ?>



		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Filtrar',
        )); ?>
	

<?php $this->endWidget(); ?>
</center>
</div>
</div>

<br>


<div class="span11">


<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>



</div>


