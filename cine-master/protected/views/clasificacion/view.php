<?php
$this->breadcrumbs=array(
	'Clasificacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clasificacion','url'=>array('index')),
	array('label'=>'Create Clasificacion','url'=>array('create')),
	array('label'=>'Update Clasificacion','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Clasificacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clasificacion','url'=>array('admin')),
);
?>

<h1>View Clasificacion #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
