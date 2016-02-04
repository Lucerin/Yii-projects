<h1>View detail of Country</h1>
<table class="table">
	<tr>
		<td><strong>ID</strong></td>
		<td><?php echo $model->id?></td>
	</tr>
	
	<tr>
		<td><strong>Name</strong></td>
		<td><?php echo $model->name?></td>
	</tr>

	<tr>
		<td><strong>Status</strong></td>
		<td><span class="label label-<?php echo $model->status==1?"info":"warning";?>"><?php echo $model->status==1?"Enable":"Disable";?></span></td>
	</tr>

</table>