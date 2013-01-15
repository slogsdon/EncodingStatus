<div class="container">
	<div class="seven">
		<h1>Jobs in Queue</h1>
	</div>
	<div class="three add-new">
		<a href="/jobs/new" class="button">Add New</a>
		<a href="/jobs/completed" class="button">Show Completed</a>
	</div>
</div>
<div class="ten">
	<table>
		<thead>
			<tr>
				<th style="width:5%;">id</th>
				<th style="width:70%;">queued file</th>
				<th style="width:25%;">date created</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($jobs as $job) {?>
			<tr>
				<td><?php echo $job->id;?></td>
				<td>
					<a href="/jobs/<?php echo $job->id;?>/edit" class="edit"><?php echo $job->input_file;?></a>
					<div class="actions">
						<a href="/jobs/<?php echo $job->id;?>/edit" class="edit">edit</a>
						<a href="/jobs/<?php echo $job->id;?>/move" class="move">move</a>
						<a href="/jobs/<?php echo $job->id;?>/trash" class="trash">trash</a>
					</div>
				</td>
				<td><?php echo date('m/d/y', strtotime($job->created_at));?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>