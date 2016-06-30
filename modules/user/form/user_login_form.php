<?php
	session_start();

	if (empty($_POST['email']) || empty($_POST['password'])) {
		// TODO Message d'erreur.
	}
	else{

		$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');
		$query_login = $db->prepare('SELECT * FROM user WHERE email=:email AND password=:password');
		$query_login->bindValue(':email', $_POST['email']);
		$query_login->bindValue(':password', hash('sha512', $_POST['password']));
		$query_login->execute();
		$user = $query_login->fetch(PDO::FETCH_ASSOC);

		if($user) {
			$_SESSION['user'] = $user;
			$_SESSION['message'][] = array(
				'body' => 'Connection réussie !',
				'type' => 'success',
			);
		}
		else {
			$_SESSION['message'][] = array(
				'body' => 'Identifiants incorrects !',
				'type' => 'danger',
			);
		}
		header('location: /');
	}

 ?>
