<?php
$this->breadcrumbs=array(
	'Clasificacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clasificacion','url'=>array('index')),
	array('label'=>'Create Clasificacion','url'=>array('create')),
	array('label'=>'View Clasificacion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Clasificacion','url'=>array('admin')),
);
?>

<h1>Update Clasificacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>