<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Registro',
);

//$this->menu=array(
	//array('label'=>'List User','url'=>array('index')),
	//array('label'=>'Manage User','url'=>array('admin')),
//);
$this->layout="//layouts/main"
?>

<h1>Registro</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>