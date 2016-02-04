<?php
$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->id,
);





if (Yii::app()->user->name=='admin')
{


$this->menu=array(
	array('label'=>'List Entrada','url'=>array('index')),
	array('label'=>'Create Entrada','url'=>array('create')),
	array('label'=>'Update Entrada','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Entrada','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entrada','url'=>array('admin')),
);

}
else
{

	$this->layout='//layouts/main';
}


?>

<h1>View Entrada #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'num_asiento',
		'fecha',
		'hora',
		'sala_funcion_id',
	),
)); ?>
