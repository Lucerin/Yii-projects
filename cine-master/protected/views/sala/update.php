<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sala','url'=>array('index')),
	array('label'=>'Create Sala','url'=>array('create')),
	array('label'=>'View Sala','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Sala','url'=>array('admin')),
);
?>

<h1>Update Sala <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>