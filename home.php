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
            <a class="navbar-brand" href="index.php">Log out</a>
        </div>
    </nav>
    <?php
      session_start();

      if(isset($_SESSION) && isset($_SESSION['error']))
      {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php
              print $_SESSION['error'];
              unset($_SESSION['error']);
            ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
        <?php
      }
      else if(isset($_SESSION) && isset($_SESSION['success']))
      {
        ?>
          <div class="alert alert-success" role="alert">
            <?php
              print $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
        <?php
      }
    ?>
    <div class="col-md-3 panel-container">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <label>Label</label>
        </div>
        <div class="panel-body">
          <div class="list-group">
            <a href="home.php?label=priority" class="list-group-item">Priority</a>
            <a href="home.php?label=family" class="list-group-item">Family</a>
            <a href="home.php?label=sports" class="list-group-item">Sports</a>
            <a href="home.php?label=movies" class="list-group-item">Movies</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 panel-container">
      <div class="panel panel-default">
        <div class="panel-body">
          <!-- Table -->
          <table class="table">
            <thead>
              <tr>
                <th class="col-md-6">Name</th>
                <th class="col-md-3">Progress</th>
                <th class="col-md-2">Due Date</th>
                <th class="col-md-1">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Name
                </td>
                <td>
                  20%
                </td>
                <td>
                  16th June
                </td>
                <td>
                  Button
                </td>
              </tr>
              <tr>
                <td>
                  Name
                </td>
                <td>
                  20%
                </td>
                <td>
                  16th June
                </td>
                <td>
                  Button
                </td>
              </tr>
            </tbody>
          </table>
          <a href="todo_add.php" class="btn btn-default pull-right">Add</a>
        </div>
      </div>
    </div>
  </body>
</html>
