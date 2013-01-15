<?php

include 'includes/bootstrap.php';

$jobs = Model::factory('Job')->filter('not_completed')->find_many();

foreach ($jobs as $job) {
	print $job->input_file . "\n";
}