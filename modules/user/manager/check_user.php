<?php

	$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'paris');

	$query = $db->prepare('SELECT * FROM user WHERE email=:email');
	$query->bindValue(':email', $email);
	$query->execute();

	return $query->fetch(PDO::FETCH_ASSOC);

 ?>
