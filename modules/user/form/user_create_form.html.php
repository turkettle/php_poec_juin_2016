<form action="modules/user/form/user_create_form_submit.php" method="post">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nom">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
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
	    <label for="role-admin">
			<input type="checkbox" name="roles[0]" value="admin" id="role-admin">Admin
		</label><br>
	    <label for="role-webmaster">
			<input type="checkbox" name="roles[1]" value="webmaster" id="role-webmaster">Webmaster
		</label><br>
	    <label for="role-journalist">
			<input type="checkbox" name="roles[2]" value="journalist" id="role-journalist">Journaliste
		</label><br>
	    <label for="role-chief-redac">
			<input type="checkbox" name="roles[3]" value="chief_redac" id="role-chief-redac">Rédac en chef
		</label><br>
	  </div>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
