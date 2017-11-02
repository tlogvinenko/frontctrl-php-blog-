<?php
	require 'func.php';
	require 'init.php';
	require 'router.php';
	require 'model/post_model.php';

	$result = execute_controller($ctrl);

	$tpl_name = $result[0];
	$data = $result[1];

	include TMP_PATH . '/header.php';
	include $tpl_name;
	include TMP_PATH . '/footer.php';