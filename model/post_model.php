<?php

function save_post($data)
{
	global $db;
	$db[] = $data;
	update_db($db);
	return True;
}
function get_all_posts()
{
	global $db;
	return $db;
}