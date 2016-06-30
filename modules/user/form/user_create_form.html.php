<form action="modules/user/form/user_create_form_submit.php" method="post">
  <div class="form-group">
    <label for="name">Nom</label>
    <input value="<?php print $user['name'] ?>" type="text" name="name" class="form-control" id="name" placeholder="Nom">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input value="<?php print $user['email'] ?>" type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="password2">Password</label>
    <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
  </div>

  <div class="form-group">
	  <div class="checkbox">
	    <label>Rôles</label><br>

		<!-- Pour chaque rôle récupéré en BDD dans la variable $result_role
		dans le script user_edit.php, on affiche une balise checkbox dans le formulaire. -->
		<?php foreach ($result_role as $role) : ?>

			<!-- On pépare la variable $checked qui contiendra l'attribut
			checked des balises checkbox. -->
			<?php $checked = NULL; ?>

			<!-- Pour chaque rôle de l'utilisateur, on vérifie l'ID. -->
			<?php foreach ($user['roles'] as $rid) : ?>

				<!-- Si l'ID du rôle de l'utilisateur est égal à l'ID du rôle de
			  	la checkbox qui est en train d'être affiché, on insère la valeur
				'checked' dans la variable $checked. Si les valeur ne sont pas
				égales, la variable $checked rest à NULL. -->
				<?php if ($rid == $role['id']) : ?>
					<?php $checked = 'checked'; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		    <label for="role-<?php print $role['name']; ?>">
				<input <?php print $checked; ?> type="checkbox" name="roles[<?php print $role['id']; ?>]" value="<?php print $role['name']; ?>" id="role-<?php print $role['name']; ?>"><?php print $role['label']; ?>
			</label><br>
		<?php endforeach; ?>

	  </div>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
