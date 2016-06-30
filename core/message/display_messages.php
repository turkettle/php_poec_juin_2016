<?php

	foreach ($_SESSION['message'] as $message) {
		include 'message.html.php';
	}

	unset($_SESSION['message']);
 ?>
