<?php

// set up
$app->view(new \Slim\View());

$app->get('/', function () use ($app) {
	$data = array();
	$app->render('application.php', $data);
});