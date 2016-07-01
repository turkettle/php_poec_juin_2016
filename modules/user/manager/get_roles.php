<?php

	$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

	$query_roles = $db->query('SELECT * FROM role');
	$query_roles->execute();
	$result_roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);

 ?>
