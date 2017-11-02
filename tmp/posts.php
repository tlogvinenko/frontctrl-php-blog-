<?php foreach ($data['posts'] as $post): ?>
	
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title"><?= $post[0] ?></h3>
			</div>
			<div class="panel-body">
				<?= $post[1] ?>
			</div>
		</div>
		
<?php endforeach ?>