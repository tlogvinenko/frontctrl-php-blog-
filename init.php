<?php
	const TMP_PATH='tmp';
	
	session_start();
	$url = $_SERVER['REQUEST_URI'];

	$parts = explode('?', $url);
	$page = $parts[0];

	$db = get_db_content();