<?php
$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entrada','url'=>array('index')),
	array('label'=>'Create Entrada','url'=>array('create')),
	array('label'=>'View Entrada','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Entrada','url'=>array('admin')),
);
?>

<h1>Update Entrada <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>