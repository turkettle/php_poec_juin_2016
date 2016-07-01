<?php
	session_start();

	if (session_destroy()) {
		session_start();

		$_SESSION['message'][] = array(
			'type' => 'success',
			'body' => 'Déconnexion réussie.'
		);
		header('Location: /');
	}
	else {

		$_SESSION['message'][] = array(
			'type' => 'error',
			'body' => 'Problème à la déconnexion.'
		);
	}

 ?>
