<table>
	<tr>
		<th style="background-color: #555;color:#fff">ID</th>
		<th style="background-color: #555;color:#fff">NAME</th>
		<th style="background-color: #555;color:#fff">STATUS</th>
	</tr>
<?php foreach($model as $data):?>
	<tr>
		<td><?php echo $data->id?></td>
		<td><?php echo $data->name?></td>
		<td><?php echo $data->status?></td>
	</tr>
<?php endforeach;?>
</table>