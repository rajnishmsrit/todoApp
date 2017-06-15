<?php

  //require __DIR__.'/app/code/rajnish/Database/Database.php';

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="app/lib/uikit-3.0.0/css/uikit.min.css" />
    <link rel="stylesheet" href="app/lib/custom/css/custom.css" />

    <script src="app/lib/jquery/jquery-1.10.2.js"></script>
    <script src="app/lib/uikit-3.0.0/js/uikit.min.js"></script>
    <script src="app/lib/custom/js/custom.js"></script>

    <title>Todo App</title>
  </head>
  <body>

    <?php
      session_start();
    if(isset($_SESSION) && isset($_SESSION['error'])){
      print $_SESSION['error'];
      unset($_SESSION['error']);
    }
    ?>

    <a class="uk-logo" href="#">Todo App</a>

    <div id="login_box">
      <h3 class="uk-card-title">LogIn</h3>
      <form id="login" name="login" method="post" action="action.php" onsubmit="return validator()">
        <input type="hidden" name="type" value="login">
        <label>Username:</label><input id="username" type="text" name="username">
        <label>Password:</label><input id="password" type="password" name="password">
        <input  type="submit" name="Submit"><br>
        <a id="btn_create" >Create Account</a>
        <a id="btn_reset" >Forgot Password/Reset</a>
      </form>
    </div>
    <div id="create_box">
      <h3 class="uk-card-title">Create Account</h3>
      <form id="create" name="create" method="post" action="action.php" onsubmit="return validator()">
        <input type="hidden" name="type" value="create">
        <label>Email: <input id="email" type="email" name="email"></label>
        <label>Username: <input id="username" type="text" name="username"></label>
        <label>Password: <input id="password" type="password" name="password"></label>
        <label>Confirm Password: <input id="confirm_password" type="password" name="confirm_password"></label>
        <input  type="submit" name="Submit"><br>
        <a id="btn_login" >Login</a>
        <a id="btn_reset" >Forgot Password/Reset</a>
      </form>
    </div>

    <div id="reset_box">
      <h3 class="uk-card-title">Reset Password</h3>
      <form id="reset" name="reset" method="post" action="action.php" onsubmit="return validator()">
        <input type="hidden" name="type" value="reset">
        <label>Username: <input id="username" type="text" name="username"></label>
        <input  type="submit" name="Submit"><br>
        <a id="btn_login" >Login</a>
        <a id="btn_create" >Create Account</a>
      </form>
    </div>

  </body>
</html>


<script type="text/javascript">
$("#btn_create").on('click', function(){

  console.log("create button clicked");

  $("#login_box").hide();
  $("#reset_box").hide();
  $("#create_box").show();

});

$("#btn_login").on('click', function(){

  console.log("login button clicked");

  $("#create_box").hide();
  $("#reset_box").hide();
  $("#login_box").show();

});

$("#btn_reset").on('click', function(){

  console.log("reset button clicked");

  $("#login_box").hide();
  $("#create_box").hide();
  $("#reset_box").show();

});

function validator(){
  //console.log($("#btn_create_account").val());
  return true;
}

</script>
