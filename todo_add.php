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
    <?php

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
    ?>

    <div id="create_box" class="col-md-3">
      <label><h3>Create</h3></label>
      <form id="todo_add" name="todo_add" method="post" action="app/route/todo_add_controller.php">
        <input type="hidden" name="type" value="todo_add">
        <textarea type="text" class="form-control" name="task" placeholder="Task"></textarea>
        <input type="text" class="form-control" name="tags" placeholder="Tags (comma separated)">
        <input type="text" class="form-control" name="progress" placeholder="Progress">
        <input type="text" class="form-control" name="duedate" placeholder="Due Date">
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </body>
</html>
