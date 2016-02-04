<?php
$this->breadcrumbs=array(
	'Funcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Funcion','url'=>array('index')),
	array('label'=>'Manage Funcion','url'=>array('admin')),
);
?>

<h1>Crear Funcion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>