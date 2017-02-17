<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="/QuoraClone/">
						<input type="text" name="controller" value="posts" hidden>
						<input type="text" name="action" value="newpost" hidden>
						<div class="form-group">
					    	<label for="question">Question:</label>
					    	<input type="text" name="title" class="form-control" id="question">
					  	</div>
					  	<div class="form-group">
					    	<label for="context">Context:</label>
					    	<textarea name="content" onkeyup="onKeyPressTextMessage(event)" class="form-control" id="context"></textarea>
					  	</div>
					  	<div class="form-group">
					  		<select name="topic">
					  			<option value="Web Development">Web Development</option>
					  			<option value="Software Development">Software Development</option>
					  		</select>
					  	</div>
					  	<div class="checkbox">
					    	<label><input type="checkbox">Anonymous</label>
					  	</div>
					  	<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">Latest Posts</div>
				<div class="panel-body">
					<?php
					foreach($newest as $new) {
						?>
						<a href="/QuoraClone/post/<?= $new->id ?>"><?= $new->title ?></a><br>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>