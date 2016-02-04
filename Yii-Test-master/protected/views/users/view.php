<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Editar Usuarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Borrar Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro que desea eliminar éste Usuarios?')),
);
?>

<h1>Ver Usuario #<?php echo $model->id . ' - ' . $model->username; ?></h1>	

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions'=>array("class"=>"table table-striped table-condensed table-hover"),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>