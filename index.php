<?php

require __DIR__.'/app/code/rajnish/Database/Database.php';

  $test = new Database('todoapp', 'todoapp', 'todoapp');

  $insert_query="insert into users(username, password) values('tw','tw')";
  $query="select * from users";
  var_dump($test->query($query));
 ?>
