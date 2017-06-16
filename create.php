<?php

  //require __DIR__.'/app/code/rajnish/Database/Database.php';

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="app/lib/bootstrap-3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app/lib/custom/css/custom.css" />

    <script src="app/lib/jquery/jquery-1.10.2.js"></script>
    <script src="app/lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="app/lib/custom/js/custom.js"></script>

    <title>Todo App</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-center" href="index.php">
            Todo App
          </a>
        </div>
      </div>
    </nav>

    <?php
    session_start();
    if(isset($_SESSION) && isset($_SESSION['error'])){
      ?>
        <div class="alert alert-danger" role="alert">
          <?php
      print $_SESSION['error'];
      unset($_SESSION['error']);
      ?>
       </div>
      <?php
    }
    ?>

    <div id="create_box" class="col-md-4">
      <label><h3>Create</h3></label>
      <form id="create" name="create" method="post" action="action.php">
        <input type="hidden" name="type" value="create">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <input id="confirm_password" type="password" name="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
        <button type="submit" class="btn btn-default">Submit</button><br>
        <a id="btn_login" class="btn btn-default navbar-btn" href="index.php">Login</a>
        <a id="btn_reset" class="btn btn-default navbar-btn" href="reset.php">Forgot Password/Reset</a>
      </form>
    </div>

  </body>
</html>
