<?php

  //require __DIR__.'/app/code/rajnish/Database/Database.php';

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="app/lib/uikit-3.0.0/css/uikit.min.css" />
    <link rel="stylesheet" href="app/lib/custom/css/custom.css" />
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

    <div class="uk-child-width-1-2@s uk-light" uk-grid>
        <div>
            <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(resources/images/dark.jpg);">
              <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                  <a class="uk-logo" href="#">Todo App</a>

                    <h3 class="uk-card-title">LogIn</h3>
                    <form method="post" action="action.php" onsubmit="return validator()">
                      <label>Username: <input id="username" type="text" name="username"></label>
                      <label>Password: <input id=password type="password" name=password></label>
                      <input class="uk-button uk-button-secondary" type="submit" name="Submit">
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>


<script type="text/javascript">
function validator(){
  if($("#username").val()==="" || $("#password").val()===""){
    return false;
  }
  return true;
}

</script>
