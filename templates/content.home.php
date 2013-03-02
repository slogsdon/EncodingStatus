<div class="container">
	<div class="ten">
		<header>
			<h1>Here is what's been happening:</h1>
		</header>
	</div>
	<div id="metrics" class="ten">
		<div class="container">
			<div class="running two first">
				<div class="inside">
					<a href="/jobs/running">
						<div class="count"><?php print count($running);?></div>
						<div class="label">running</div>
					</a>
				</div>
			</div>
			<div class="completed two">
				<div class="inside">
					<a href="/jobs/completed">
						<div class="count"><?php print count($completed);?></div>
						<div class="label">completed</div>
					</a>
				</div>
			</div>
			<div class="failed two last">
				<div class="inside">
					<a href="/jobs/failed">
						<div class="count"><?php print count($failed);?></div>
						<div class="label">failed</div>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="uniques two first">
				<div class="inside">
					<a href="/jobs/uniques">
						<div class="count"><?php print count($uniques);?></div>
						<div class="label">unique files</div>
					</a>
				</div>
			</div>
			<div class="all two">
				<div class="inside">
					<a href="/jobs/all">
						<div class="count"><?php print count($all);?></div>
						<div class="label">total jobs</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
<?php print_r($running); ?>
<?php print_r($completed); ?>
<?php print_r($failed); ?>
<?php print_r($uniques); ?>
<?php print_r($all); ?>
-->