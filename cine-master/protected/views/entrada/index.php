<?php
$this->breadcrumbs=array(
	'Entradas',
);
if (Yii::app()->user->name=='admin')
{

$this->menu=array(
	array('label'=>'Create Entrada','url'=>array('create')),
	array('label'=>'Manage Entrada','url'=>array('admin')),
);

}
else
{

	$this->layout='//layouts/main';
}
?>

<h1>Entradas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
