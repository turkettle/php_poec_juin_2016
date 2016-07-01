<?php
	session_start();

	// On charge les différentes APIs du site.
	include 'modules/user/user.api.php';

	// On détermine la route à utiliser
	include 'core/router/start.php';

	// On affiche la page HTML.
	include 'core/template_engine/page.html.php';

?>
