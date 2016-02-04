<?php
$this->breadcrumbs=array(
	'Clasificacions',
);

$this->menu=array(
	array('label'=>'Create Clasificacion','url'=>array('create')),
	array('label'=>'Manage Clasificacion','url'=>array('admin')),
);
?>

<h1>Clasificacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
