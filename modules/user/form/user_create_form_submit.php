<?php
	// print_r($st->errorInfo());

	// Si le mot de passe n'est pas vide et que les 2 mots de passe correspondent,
	// On veut bien insérer l'utilisateur en BDD.
	if (!empty($_POST['password1']) && $_POST['password1'] == $_POST['password2']) {

		// Si l'utilisateur que l'on veut créer n'utilise pas une adresse déjà utilisée,
		// on veut insérer l'utilisateur en BDD.
		if (!user_exists($_POST['email'])) {

			// On hashe le lot de passe pour plus de sécurité.
			$pwd = hash('sha512', $_POST['password1']);

			// On créé un connexion avec la BDD.
			$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

			// On prépare la requête pour insérer l'utilisateur en BDD.
			$query = $db->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
			// On attribut des valeurs pour chaque placeholder
			$query->bindValue(':name', $_POST['name']);
			$query->bindValue(':email', $_POST['email']);
			$query->bindValue(':password', $pwd);
			// On insére l'utilisateur en BDD.
			$query->execute();

			// On récupère son ID en BDD.
			$user_id = $db->lastInsertId();

			// Pour chaque rôle sélectionné dans le formulaire de création d'utilisateur,
			// on insérer un élément dans la table intermédiare des utilisateurs
			// et des rôles.
			foreach ($_POST['roles'] as $role_name) {

				// On récupère de la BDD l'ID du role en fonction de son nom
				// machine.
				$query_role = $db->prepare('SELECT id FROM role WHERE name=:name');
				$query_role->bindValue(':name', $role_name);
				$query_role->execute();
				$result_role = $query_role->fetch(PDO::FETCH_ASSOC);

				// Voici l'ID du role.
				$role_id = $result_role['id'];

				// On insère un élément dans la table intermédiare avec l'ID de
				// l'utilisateur et l'ID du rôle.
				$query_user_role = $db->prepare('INSERT INTO user_role (uid, rid) VALUES (:uid, :rid)');
				$query_user_role->bindValue(':uid', $user_id);
				$query_user_role->bindValue(':rid', $role_id);
				$query_user_role->execute();

			}
		}
		else {
			print 'L\'utilisateur existe déjà. Veuillez choisir une autre addresse email.';
		}
	}
	else {
		print 'Vos mot de passe ne correspondent pas !';
	}













?>
