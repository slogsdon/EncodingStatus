<?php

// $dsn = "mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}";
// $options = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// ); 

// $db = null;
// try {
//     $db = new PDO($dsn, $config['db']['username'], $config['db']['password'], $options);
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage()."\n";
// }
$split = explode('/', $_SERVER['MONGO_URL']);
$database_name = array_pop($split);
$mongo_url = implode('/', $split);
$db = null;

try {
	$m = new MongoClient($mongo_url);
	$db = $m->selectDB($database_name);
} catch (MongoConnectionException $e) {
	// Can't connect
}