<div class="container">
	<div class="ten">
		<form action="/jobs" method="post">
			<div class="container">
				<div class="seven">
					<h1><?php echo $action.' '.($action=='new'?'job':$job->id);?></h1>
				</div>
				<div class="three add-new">
					<a href="/jobs" class="button">Cancel</a>
					<input type="submit" name="submit" value="Save" class="button" />	
				</div>
			</div>
			<div class="container">
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="output_dir">Output Directory</label>
				<input type="text" name="output_dir" value="$job->output_dir" disabled="disabled" />
				<label for="created_at">Input File</label>
				<input type="text" name="created_at" value="$job->created_at" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<label for="input_file">Input File</label>
				<input type="text" name="input_file" value="$job->input_file" disabled="disabled" />
				<input type="submit" name="submit" value="Submit" class="button" />	
					<a href="/jobs" class="button">Cancel</a>
			</div>
		</form>
	</div>
</div>