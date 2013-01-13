<?php
require './vendor/autoload.php';
require './includes/database.php';
include './includes/extras.php';

$app = new \Slim\Slim(array(
	'templates.path' => './templates',
));

$app->error(function (\Exception $e) use ($app) {
	$app->render('error.php', array('error' => $e));
});
