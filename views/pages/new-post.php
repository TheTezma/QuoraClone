<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<form>
						
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
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