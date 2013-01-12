<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
	'templates.path' => './templates',
));

include_once 'routes/api.php';
include_once 'routes/web.php';

$app->run();
