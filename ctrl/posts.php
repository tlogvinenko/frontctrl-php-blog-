<?php

function posts()
{
	$posts = get_all_posts();
	return [
		TMP_PATH . '/posts.php',
		['posts' => $posts]
	];
}