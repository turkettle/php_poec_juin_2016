<?php

	$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

	$query_user = $db->prepare('
		SELECT u.*, ur.rid
		FROM user AS u
		LEFT JOIN user_role AS ur
		ON u.id = ur.uid
		WHERE id=:id
	');
	$query_user->bindValue(':id', 9);
	$query_user->execute();
	$result_user = $query_user->fetchAll(PDO::FETCH_ASSOC);

	$user = $result_user[0];
	unset($user['rid']);
	foreach ($result_user as $user_raw) {
		$user['roles'][] = $user_raw['rid'];
	}

	$query_role = $db->query('SELECT * FROM role');
	$query_role->execute();
	$result_role = $query_role->fetchAll(PDO::FETCH_ASSOC);

	include 'form/user_create_form.html.php';

?>
