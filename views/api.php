<?php

class ApiView extends \Slim\View {
	public function render() {
		$json = json_encode($this->data['data']);
		header('Content-type: application/json');
		echo $json;
	}
};