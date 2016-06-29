<?php
	// print '<pre>';
	// print_r($_POST);
	// print '</pre>';

$users_db = array(
	array(
		'id' => '1',
		'name' => 'JP',
		'mail' => 'jp@example.com',
		'roles' => array('admin'),
	),
	array(
		'id' => '2',
		'name' => 'DD',
		'mail' => 'dd@example.com',
		'roles' => array('journalist'),
	),
	array(
		'id' => '3',
		'name' => 'MC',
		'mail' => 'mc@example.com',
		'roles' => array('chief_editor'),
	),
	array(
		'id' => '4',
		'name' => 'JFX',
		'mail' => 'jfx@example.com',
		'roles' => array('webmaster','chief_editor'),
	),
);


$users = array();

foreach ($users_db as $user_db) {
	$users[] = array(
		'uid' => $user_db['id'],
		'user_name' => $user_db['name'],
		'user_mail' => $user_db['mail'],
		'user_roles' => generate_user_roles($user_db['roles']),
	);
}

include_once 'views/users.html.php';


/*		FUNCTIONS 		*/


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
