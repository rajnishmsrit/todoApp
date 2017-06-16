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
          <a class="navbar-brand text-center" href="home.php">
            Todo App
          </a>
        </div>
        <div class="pull-right">
            <a class="navbar-brand" href="user.php">Rajnish Kumar
              <span class="glyphicon glyphicon-user"></span>
            </a>
        </div>
    </nav>
    <div class="col-md-4">
      <table class="table">
        <tbody>
          <tr>
            <td>
              Name
            </td>
            <td>
              Rajnish Kumar
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
