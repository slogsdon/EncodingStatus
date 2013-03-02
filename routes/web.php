<?php

// set up
$app->view(new \Slim\View());

// routes
$app->get('/:page(/:id(/:action))', function ($page, $id = null, $action = null) use ($app) {
	$data = Model::factory(ucfirst(substr($page, 0, strlen($page) - 1)));
	
	switch ($page) {
		case 'jobs':
			$filter = null;
			if (!is_null($id) && !intval($id)) {
				if (is_null($action) && $id == 'new') $action = 'edit';
				if ($id == 'completed') $filter = $id;
				if ($id == 'not_completed') $filter = $id;
				if ($id == 'running') $filter = $id;
				if ($id == 'failed') $filter = $id;
				if ($id == 'all') $filter = null;
			}
			$data = $data->
				where('trashed', 0)->
				order_by_desc('started_at')->
				order_by_desc('priority');
			if (!is_null($filter))
				$data = $data->filter($filter);
			break;
		default:
			return;
			break;
	}
	if (!is_null($id) && intval($id)) {
		$data = $data->
			where('id', $id)->
			find_one();
	} else {
		$data = $data->find_many();
	}

	$view = $app->view();
	$file = $view->getTemplatesDirectory() . '/content.' . $page 
		. (!is_null($action) ? '.' . $action : '' ) . '.php';
	// remove 's' if there's an associated action
	if (!is_null($action)) $page = substr($page, 0, strlen($page) - 1);
	
	if (!file_exists($file) || count($data) == 0) {
		$app->notfound();
	} else {
		$data = array(
			'app' => $app,
			'file' => $file,
			"$page" => $data,
			'action' => $action,
		);
		$app->render('application.php', $data);
	}
});

$app->get('/', function () use ($app) {
	$view = $app->view();
	$file = $view->getTemplatesDirectory() . '/content.home.php';

	$jobs = Model::factory('Job');

	$data = array(
		'app' => $app,
		'file' => $file,
		'completed' => $jobs->filter('completed')->find_many(),
		'running' => $jobs->filter('running')->find_many(),
		'failed' => $jobs->filter('failed')->find_many(),
		'uniques' => $jobs->group_by('input_file')->find_many(),
		'all' => $jobs->find_many(),
		//'db' => $db,
	);
	$app->render('application.php', $data);
});