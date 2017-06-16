<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/repos/todoApp/config.php';

session_start();

if(isset($_POST) && isset($_POST['type']) && $_POST['type']==="todo_add"){


  $task = $_POST['task'];
  $tags = $_POST['tags'];
  $progress = $_POST['progress'];
  $due_date = $_POST['duedate'];

  if(empty($due_date)){
    $_SESSION['error'] = "Required Field are empty.";
    header("Location: ".BP."/todo_add.php");
  }
  else
  {
    $todo = new Db();
    $todo->addTodo($task, $tags, $progress, $due_date);
    $_SESSION['success'] = "Added task";
    header("Location: ".BP."/home.php");
  }

}
