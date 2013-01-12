<?php

// set up
include_once '../views/api.php';
$app->view(new ApiView());

// routes
$app->get('/api/jobs/:id/', function ($id) use () {
	
});

$app->post('/api/jobs/:id/', function ($id) use () {
	
});

$app->get('/api/jobs/', function () use () {
	
});

$app->post('/api/jobs/', function () use () {
	/**
	 * @param -
 	 *   {
	 *     "input_file": <string>,
	 *     "output_dir": <string>,
	 *     "profile": <int?>,
	 *     "collection": <int?>
	 *   }
	 * @return - 
	 *   {
	 *	   "result": <string>,
	 *	   "data": <obj>
	 *   }
	 */
	
});

$app->get('/api/profiles/:id/', function ($id) use () {

});

$app->post('/api/profiles/:id/', function ($id) use () {

});

$app->get('/api/profiles/', function () use () {

});

$app->post('/api/profiles/', function () use () {

});

$app->get('/api/collections/:id/', function ($id) use () {

});

$app->post('/api/collections/:id/', function ($id) use () {

});

$app->get('/api/collections/', function () use () {

});

$app->post('/api/collections/', function () use () {

});
