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
          <a class="navbar-brand text-center" href="#">
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

    <div id="login_box" class="col-md-4">
      <label><h3>Login</h3></label>
      <form id="login" name="login" method="post" action="action.php" onsubmit="return validator()">
      <div class="form-group">
        <input type="hidden" name="type" value="login">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <button type="submit" class="btn btn-default">Submit</button><br>
        <a id="btn_create" class="btn btn-default navbar-btn" href="create.php">Create Account</a>
        <a id="btn_reset" class="btn btn-default navbar-btn" href="reset.php">Forgot Password/Reset</a>
      </div>
      </form>
    </div>
  </body>
</html>


<script type="text/javascript">
</script>
