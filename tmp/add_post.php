<form action="" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend>Create new post</legend>
		</div>
		
		<div class="form-group">
			<label for="inputTitle" class="col-sm-2 control-label">Title:</label>
			<div class="col-sm-10">
				<input type="text" name="title" id="inputTitle" class="form-control" value=""  title="">
			</div>
		</div>

		<div class="form-group">
			<label for="textareaContent" class="col-sm-2 control-label">Content:</label>
			<div class="col-sm-10">
				<textarea name="content" id="textareaContent" class="form-control" rows="3" ></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary" >Create</button>
			</div>
		</div>
</form>