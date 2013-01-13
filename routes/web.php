<?php

// set up
$app->view(new \Slim\View());

// routes
$app->get('/:page', function ($page) use ($app) {
	$view = $app->view();
	$file = $view->getTemplatesDirectory() . '/content.' . $page . '.php';
	
	if (!file_exists($file)) {
		$app->notfound();
	} else {
		$data = array(
			'app' => $app,
			'file' => $file,
		);
		$app->render('application.php', $data);
	}
});

$app->get('/', function () use ($app, $db) {
	$view = $app->view();
	$file = $view->getTemplatesDirectory() . '/content.home.php';

	$data = array(
		'app' => $app,
		'file' => $file,
		'db' => $db,
	);
	$app->render('application.php', $data);
});