<?php
$this->breadcrumbs=array(
	'Sala Funcions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalaFuncion','url'=>array('index')),
	array('label'=>'Create SalaFuncion','url'=>array('create')),
	array('label'=>'Update SalaFuncion','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete SalaFuncion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalaFuncion','url'=>array('admin')),
);
?>

<h1>View SalaFuncion #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'funcion_id',
		'sala_id',
		'fecha',
		'hora',
		'precio',
		'idioma_id',
	),
)); ?>
