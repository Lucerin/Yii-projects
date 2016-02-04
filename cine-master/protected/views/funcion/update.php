<?php
$this->breadcrumbs=array(
	'Funcions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcion','url'=>array('index')),
	array('label'=>'Create Funcion','url'=>array('create')),
	array('label'=>'View Funcion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Funcion','url'=>array('admin')),
);
?>

<h1>Update Funcion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>