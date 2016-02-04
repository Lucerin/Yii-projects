<?php
$this->breadcrumbs=array(
	'Funcions',
);

if (Yii::app()->user->name=='admin')
{
$this->menu=array(
	array('label'=>'Crear Funcion','url'=>array('create')),
	array('label'=>'Administrar Funcion','url'=>array('admin')),
);
}

?>

<h1>Funciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
