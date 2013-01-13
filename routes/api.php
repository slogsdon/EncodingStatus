<?php

// set up
include_once './views/api.php';
$app->view(new ApiView());

// routes
$app->get('/api/jobs/:id/', function ($id) use ($app) {
	
});

$app->post('/api/jobs/:id/', function ($id) use ($app) {
	
});

$app->get('/api/jobs/', function () use ($app) {
	
});

$app->post('/api/jobs/', function () use ($app) {
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

$app->get('/api/profiles/:id/', function ($id) use ($app) {

});

$app->post('/api/profiles/:id/', function ($id) use ($app) {

});

$app->get('/api/profiles/', function () use ($app) {

});

$app->post('/api/profiles/', function () use ($app) {

});

$app->get('/api/collections/:id/', function ($id) use ($app) {

});

$app->post('/api/collections/:id/', function ($id) use ($app) {

});

$app->get('/api/collections/', function () use ($app) {

});

$app->post('/api/collections/', function () use ($app) {

});
