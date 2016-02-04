<?php
$this->breadcrumbs=array(
	'Sala Funcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalaFuncion','url'=>array('index')),
	array('label'=>'Manage SalaFuncion','url'=>array('admin')),
);
?>

<h1>Create SalaFuncion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>