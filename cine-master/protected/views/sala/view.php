<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sala','url'=>array('index')),
	array('label'=>'Create Sala','url'=>array('create')),
	array('label'=>'Update Sala','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Sala','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sala','url'=>array('admin')),
);
?>

<h1>View Sala #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'capacidad',
	),
)); ?>
