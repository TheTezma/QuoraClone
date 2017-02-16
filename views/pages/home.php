<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Trending Topics
				</div>
				<div class="panel-body">
				<?php
					$Topic = new Topic;
					$Topic->trendingtopics();
				?>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel-test">
				<a href="/QuoraClone/new-post">What is your question?</a>
			</div>
		<?php foreach($posts as $post) { ?>
		  <div class="post-panel">
		  	<div class="post-panel-heading">
		  		<a href="/QuoraClone/post/<?= $post->id ?>" class="post-title"><?= $post->title; ?></a>
		  	</div>
		  	<div class="post-panel-footer">
		  		<?php
		  		if(empty($_SESSION['user'])) {
					
				} else {
					?> <button class="upvote-btn">Upvote | <?= $post->upvotes ?></button> <?php
				}
				?>
		  	</div>
		  </div>
		<?php } ?>
		</div>
		<div class="col-sm-3">
			<?php
			if(empty($_SESSION['user'])) {
				?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Register
					</div>
					<div class="panel-body">
						<form action="/QuoraClone/">
						  <input type="text" name="controller" value="users" hidden>
						  <input type="text" name="action" value="register" hidden>
						  <div class="form-group">
						    <label for="username">Username:</label>
						    <input type="text" name="username" class="form-control" id="username">
						  </div>
						  <div class="form-group">
						    <label for="email">Email Address:</label>
						    <input type="email" name="email" class="form-control" id="email">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Password:</label>
						    <input type="password" name="password" class="form-control" id="pwd">
						  </div>
						  <button type="submit" class="btn btn-default">Register</button>
						</form>
						<a href="/QuoraClone/login">Or Login</a>
					</div>
				</div>
				<?php
			} else {
				?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Set Up Your Account
					</div>
					<div class="panel-body">
					<?php
					$User::accountsetup();
					?>
				</div>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</div>