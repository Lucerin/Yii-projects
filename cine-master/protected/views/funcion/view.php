<?php
$this->breadcrumbs=array(
	'Funcions'=>array('index'),
	$model->id,
);


if(Yii::app()->user->name=='admin')
{

$this->menu=array(
	array('label'=>'List Funcion','url'=>array('index')),
	array('label'=>'Create Funcion','url'=>array('create')),
	array('label'=>'Update Funcion','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Funcion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcion','url'=>array('admin')),
);
}
else
{
	$this->layout="//layouts/main";
}

?>

<h1>Detalles Funcion #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nombre',
		//'estado',
		'sinopsis',
	//	'categoria_id',
		array(
			'label'=>'Categoria',
			'value'=>$model->categoria->nombre,
			),
		array(
			'label'=>'Clasificacion',
			'value'=>$model->clasificacion->nombre
			)
		//'clasificacion_id',
	),
)); ?>

<br>
<h3>Disponibilidad</h3>

<?php

	foreach ($listSalaFuncion as $salaFuncion)
	{
		
		$model_sala= new Sala();

		$model_sala_funcion=$model_sala_funcion->findByPk($salaFuncion['id']);
		$model_sala=$model_sala->findByPk($salaFuncion['sala_id']);

		?>

		<div class="span3">

			<div class="bootstrap-widget bootstrap-widget-table">

		    <div class="bootstrap-widget-header"><h3>Sala <?php echo $model_sala->nombre;  ?></h3></div>
		    <div class="bootstrap-widget-content">


				<?php
						
						echo '<strong>Idioma :</strong>'.$model_sala_funcion->idioma->nombre."<br>";
						echo '<strong>Fecha  :</strong>'.$model_sala_funcion->fecha."<br>";
						echo '<strong>Hora   :</strong>'.$model_sala_funcion->hora."<br>";
						echo '<strong>Precio :</strong>'.$model_sala_funcion->precio."<br>";

						$data_sala=SalaTipo::model()->findAll('sala_id=:id_sala',array(':id_sala'=>$model_sala_funcion->id));

							foreach ($data_sala as $salatipo) 
							{
								
								$model_SalaTipo=$model_SalaTipo->findByPk($salatipo['id']);
								
								
								echo "<strong>Tipo :   </strong>".$model_SalaTipo->tipo->nombre."<br>";
							}

				?>
					<center>
						<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('../entrada/create?id='.$model_sala_funcion->id); ?>"> Comprar</a>
					</center>
					<br>
					

				</div>
				</div>
	    </div>
				

				<?php
	}

?>

<br>

<div class="span6">

</div>
