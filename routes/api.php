<?php

// set up

// routes
$app->get('/api/:table(/:id)', function ($table, $id = null) use ($app, $db) {
	$response = $app->response();
	$response['Content-Type'] = 'application/json';
	
	$select = '';
	$join = '';
	$where = '';
	$order = '';
	$group = '';
	$limit = '';

	switch ($table) {
		case 'jobs':
			$select = array(
				'a.id', 
				'a.pid',
				'a.priority',
				'a.input_file', 
				'a.output_dir', 
				'a.profile_id', 
				'a.collection_id', 
				'a.created_at', 
				'a.started_at',
				'a.finished_at',
				'a.trashed', 
				'b.name as profile_name',
				'c.name as collection_name',
			);
			$join = 'LEFT JOIN profiles b ON a.profile_id = b.id'
				. ' LEFT JOIN collections c ON a.collection_id = c.id';
			$where = 'trashed = 0';
			$order = 'priority DESC';
			break;
		default:
			return;
			break;
	}
	if (!is_null($id) && intval($id)) {
		$where .= " AND a.id = {$id}";
	}
	if (!is_null($id) && !intval($id)) {
		$table .= '.' . $id;
		$where .= " AND finished_at IS NOT NULL";
	}

	$data = array();

	if (!is_null($db)) {
		$sql = "SELECT ".implode(',', $select)." FROM {$table} a";
		if ('' != $join) $sql .= ' ' . $join;
		if ('' != $where) $sql .= " WHERE {$where}";
		if ('' != $order) $sql .= " ORDER BY {$order}";
		if ('' != $group) $sql .= " GROUP BY {$group}";
		if ('' != $limit) $sql .= " LIMIT {$limit}";
		//die($sql);

		$res = $db->prepare($sql);
		$res->execute();
		while ($result = $res->fetchAll(PDO::FETCH_ASSOC)) {
			if (!is_null($result) && count($result) > 0) {
				$data = $result;
			}
		}
	}

	if (!is_null($id) && intval($id)) $data = $data[0];	

	$response->write(json_encode($data));
	$response->finalize();
});

$app->post('/api/:table(/:id)', function ($table, $id) use ($app, $db) {
	$app->view(new ApiView());
	
});
