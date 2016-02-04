<?php
$this->breadcrumbs=array(
	'Sala Funcions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalaFuncion','url'=>array('index')),
	array('label'=>'Create SalaFuncion','url'=>array('create')),
	array('label'=>'View SalaFuncion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage SalaFuncion','url'=>array('admin')),
);
?>

<h1>Update SalaFuncion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>