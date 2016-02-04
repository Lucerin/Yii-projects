<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario=>array('view','id'=>$model->idUsuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->idUsuario)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->idUsuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>