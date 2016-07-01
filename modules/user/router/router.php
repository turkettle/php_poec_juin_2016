<?php

	ob_start();

	switch ($_GET['action']) {

		case 'edit':

			// Récupérer les données de l'utilisateur.
			$uid = $_GET['uid'];
			include 'modules/user/manager/get_user.php';

			// Récupérer la liste de rôles.
			include 'modules/user/manager/get_roles.php';

			// Afficher le code HTML du formulaire pré-rempli.
			include 'modules/user/form/user_form.html.php';

			break;

		default:
			include '404.html';
			break;
	}

	$main_content = ob_get_clean();
?>
