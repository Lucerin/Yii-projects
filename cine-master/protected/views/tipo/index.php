<?php
$this->breadcrumbs=array(
	'Tipos',
);


if(Yii::app()->user->name=='admin')
{
	$this->menu=array(
		array('label'=>'Create Tipo','url'=>array('create')),
		array('label'=>'Manage Tipo','url'=>array('admin')),
	);

}

?>

<h1>Tipos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
