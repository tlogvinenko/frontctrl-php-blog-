<?php	
	$links = [
		['/', 'Home'],
		['/about', 'About'],
		['/add_post', 'Add new post'],
		['/login', 'Add login'],
		['/register', 'Add register'],
		['/logout', 'Add logout'],
		['/posts', 'ALL posts'],
	];

	foreach ($links as $link):?>
		
		<li <?= $page === $link[0] ? 'class="active"' : '' ?>>
			<a href="<?= $link[0] ?>"><?= $link[1] ?></a>
		</li>
<?php endforeach; ?> 
