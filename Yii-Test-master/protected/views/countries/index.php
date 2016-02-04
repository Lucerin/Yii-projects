<h1>Countries</h1>
<?php echo CHtml::link("Crear",array("create"));?> | 
<?php echo CHtml::link("Exportar Excel",array("index","excel"=>1));?>

<?php foreach($countries as $data):?>

<h3><?php echo $data->name?> 
	<a href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>">
		<span class="label label-<?php echo $data->status==1?"info":"warning";?>">
			<?php echo $data->status==1?"Enable":"Disable";?>
		</span>
	</a>
</h3>
<label class="badge badge-info"><?php echo $data->id;?></label> 
<?php echo CHtml::link("Actualizar",array("update","id"=>$data->id));?> |
<?php echo CHtml::link("Borrar",array("delete","id"=>$data->id),array("confirm"=>"Está seguro que desea borrar?"));?> |
<?php echo CHtml::link("Ver",array("view","id"=>$data->id));?>
<hr>
<?php endforeach;?>