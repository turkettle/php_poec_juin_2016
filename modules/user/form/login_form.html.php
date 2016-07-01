
<?php if (user_is_logged_in()): ?>
	<a href="modules/user/user_logout.php" class="btn btn-danger navbar-brand pull-right">Sign out</a>
<?php else : ?>
	<div id="navbar" class="navbar-collapse collapse">
		<form action="modules/user/form/user_login_form.php" method="post" class="navbar-form navbar-right" role="form">
			<div class="form-group">
				<input name="email" type="text" placeholder="Email" class="form-control">
			</div>
			<div class="form-group">
				<input name="password" type="password" placeholder="Password" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Sign in</button>
		</form>
	</div>
<?php endif; ?>
