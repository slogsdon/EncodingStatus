<div class="container">
	<div class="ten">
		<form action="/jobs" method="post">
			<div class="container">
				<div class="ten">
					<h1><?php echo $action.' '.($action=='new'?'job':$job->id);?></h1>
				</div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="output_dir">Output Directory</label></div>
				<div class="nine"><input type="text" name="output_dir" value="<?php echo $job->output_dir;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="created_at">Input File</label></div>
				<div class="nine"><input type="text" name="created_at" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="one"><label for="input_file">Input File</label></div>
				<div class="nine"><input type="text" name="input_file" value="<?php echo $job->input_file;?>" disabled="disabled" /></div>
			</div>
			<div class="container">
				<div class="nine shift-one">
					<input type="submit" name="submit" value="Submit" class="button" />	
					<a href="/jobs" class="button">Cancel</a>
				</div>
			</div>
		</form>
	</div>
</div>