<?php
$this->breadcrumbs=array(
	'Sala Funcions',
);

$this->menu=array(
	array('label'=>'Create SalaFuncion','url'=>array('create')),
	array('label'=>'Manage SalaFuncion','url'=>array('admin')),
);
?>

<h1>Sala Funcions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
