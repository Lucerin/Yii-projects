<?php
$this->breadcrumbs=array(
	'Categorias',
);

$this->menu=array(
	array('label'=>'Create Categoria','url'=>array('create')),
	array('label'=>'Manage Categoria','url'=>array('admin')),
);
?>

<h1>Categorias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
