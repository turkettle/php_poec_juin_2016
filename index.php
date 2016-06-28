<?php

  $my_string = 'Bonjour Lulu !!';
  $my_int = 10;
  $my_state = FALSE;
  $my_users = array(
    0 => array(
      'id' => '1',
      'name' => 'JP',
      'mail' => 'jp@example.com'
    ),
    1 => array(
      'id' => '2',
      'name' => 'DD',
      'mail' => 'dd@example.com'
    ),
    2 => array(
      'id' => '3',
      'name' => 'MC',
      'mail' => 'mc@example.com'
    ),
    3 => array(
      'id' => '4',
      'name' => 'JFX',
      'mail' => 'jfx@example.com'
    ),
  );

  // print '<pre>';
  // print_r($my_users);
  // print '</pre>';

  foreach($my_users as $user) {
    print 'Nom: ' . $user['name'] . '<br/>';
    print 'Email:' . $user['mail'] . '<br/>';
  }


?>
