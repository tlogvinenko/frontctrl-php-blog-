<?php

function add_post()
{
	if (is_post()) {
		$data = get_from($_POST, ['title','content']);
		if ($data === NULL) {
			$data = [];
		}else {
			if(save_post($data)){
				header('Location: /posts');
				exit();
			}else{

			}
		}

	}
	return [TMP_PATH . '/add_post.php', []];
}