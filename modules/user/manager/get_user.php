<?php

	$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

	$query_user = $db->prepare('
		SELECT u.*, ur.rid
		FROM user AS u
		LEFT JOIN user_role AS ur
		ON u.id = ur.uid
		WHERE id=:id
	');
	$query_user->bindValue(':id', $uid);
	$query_user->execute();
	$result_user = $query_user->fetchAll(PDO::FETCH_ASSOC);

	$user = $result_user[0];
	unset($user['rid']);
	foreach ($result_user as $user_raw) {
		$user['roles'][] = $user_raw['rid'];
	}

?>
