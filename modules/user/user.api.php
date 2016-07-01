<?php

	function user_is_logged_in() {

		return isset($_SESSION['user']);
	}

	function user_exists($email) {

		ob_start();
		include 'modules/user/manager/check_user.php';
		$check_user = ob_get_clean();

		return $check_user;
	}

	function generate_user_roles($roles) {

		$output = NULL;
		$nb = count($roles);

		for ($i = 0; $i < $nb; $i++) {

			if ($i) {
				$output .= ', ';
			}
			$output .= $roles[$i];
		}

		return $output;
	}

 ?>
