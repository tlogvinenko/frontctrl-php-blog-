<?php

function get_db_content()
{
	$encoded = file_get_contents('db');
	$db_data = unserialize($encoded);

	if ($db_data === FALSE) {
		$db_data = [];
	}

	return $db_data;
}

function update_db($db_data)
{
	$encoded = serialize($db_data);
	file_put_contents('db', $encoded);
}
function execute_controller($ctrl)
{
	require 'ctrl/' .$ctrl. '.php';
	return $ctrl();
}
function is_post()
{
	return $_SERVER['REQUEST_METHOD'] ==='POST';
}
function get_from($arr, $fields)
{
	$result = [];
	foreach ($fields as $f) {
		if (isset($arr[$f])) {
			$result[]=$arr[$f];
		} else {
			return NULL;
		}
	}
	return $result;
}