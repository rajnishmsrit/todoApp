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
    <nav class="navbar navbar-default">
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

    <div id="reset_box" class="col-md-4">
      <h3 class="uk-card-title">Reset Password</h3>
      <form id="reset" name="reset" method="post" action="action.php" onsubmit="return validator()">
        <input type="hidden" name="type" value="reset">
        <input type="text" class="form-control" placeholder="Username">
        <button type="submit" class="btn btn-default">Reset</button><br>
        <a id="btn_login" class="btn btn-default navbar-btn" href="index.php">Login</a>
        <a id="btn_create" class="btn btn-default navbar-btn" href="create.php">Create Account</a>
      </form>
    </div>

  </body>
</html>
