<?php

  $my_users = array(
    0 => array(
      'id' => '1',
      'name' => 'JP',
      'mail' => 'jp@example.com',
      'role' => array('admin'),
    ),
    1 => array(
      'id' => '2',
      'name' => 'DD',
      'mail' => 'dd@example.com',
      'role' => array('journalist'),
    ),
    2 => array(
      'id' => '3',
      'name' => 'MC',
      'mail' => 'mc@example.com',
      'role' => array('chief_editor'),
    ),
    3 => array(
      'id' => '4',
      'name' => 'JFX',
      'mail' => 'jfx@example.com',
      'role' => array('webmaster','chief_editor'),
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
