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
				<a href="#">What is your question?</a>
			</div>
		<?php foreach($posts as $post) { ?>
		  <div class="post-panel">
		  	<div class="post-panel-heading">
		  		<?= $post->title; ?>
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