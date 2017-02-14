<div class="navigation">
	<div class="navcontainer">
		<ul class="left-nav">
			<li><a class="logo" href="/QuoraClone">{{ AppName }}</a></li>
		</ul>
		<div class="search-container">
			<ul class="search-nav">
				<form action="search-post" method="POST">
					<li><input type="search" class="search" name="search-query" placeholder="Got a question?"></li><!--
				 --><li><input type="submit" class="search-btn" name="search-btn" value="Search Question"></li>
				</form>
			</ul>
		</div>
		<ul class="right-nav pull-right">
			<li><a href="/QuoraClone">Home</a></li>
			<li><a href="/QuoraClone/notifications">Notifications</a></li>
			<?php
			$User = new User;
			$User->isLoggedIn();

			if(empty($_SESSION['user'])) {
				?> <li><a href="login">Login/Register</a></li> <?php
			} else {
				?> <li><a href="/QuoraClone/new-post">New Post</a></li> 
					<li><a onclick="myFunction()" class="dropbtn"><?= $_SESSION['user']['username'] ?></a></li> 
					<div id="myDropdown" class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="logout">Logout</a>
					</div>
				<?php
			}

			?>
		</ul>
	</div>
</div>