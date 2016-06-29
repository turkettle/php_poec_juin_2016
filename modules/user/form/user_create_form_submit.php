<?php
	print '<pre>';
	print_r($_POST);
	print '</pre>';
	// print_r($st->errorInfo());

	if (!empty($_POST['password1']) && $_POST['password1'] == $_POST['password2']) {

		if (!user_exists($_POST['email'])) {

			$pwd = hash('sha512', $_POST['password1']);

			$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

			$query = $db->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
			$query->bindValue(':name', $_POST['name']);
			$query->bindValue(':email', $_POST['email']);
			$query->bindValue(':password', $pwd);
			$query->execute();
		}
		else {
			print 'L\'utilisateur existe déjà. Veuillez choisir une autre addresse email.';
		}
	}
	else {
		print 'Vos mot de passe ne correspondent pas !';
	}

	function user_exists($email) {

		$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

		$query = $db->prepare('SELECT id FROM user WHERE email=:email');
		$query->bindValue(':email', $email);
		$query->execute();
		$result = $query->fetch();
	}













?>
