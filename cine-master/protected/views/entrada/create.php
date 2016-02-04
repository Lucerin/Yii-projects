<?php
$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	'Create',
);

//$this->menu=array(
	//array('label'=>'List Entrada','url'=>array('index')),
//	array('label'=>'Manage Entrada','url'=>array('admin')),
//);
$this->layout="//layouts/main"
?>

<h1>Compra de Entradas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'idSalaFuncion'=>$idSalaFuncion)); ?>