<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/repos/todoApp/config.php';

session_start();

if(isset($_POST) && isset($_POST['type'])){

  if($_POST['type']==="login")
  {
    //Verify the kind of form
    if(empty($_POST['username']) || empty($_POST['password']))
    {
      $_SESSION['error'] = "Please fill mandatory fields.";
      header('Location: index.php');
    }
    else
    {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $users = new ManageUsers();

      //Gets Success when verified
      if($users->verifyUser($username, $password))
      {
        header('Location: home.php');
      }
      else
      {
        $_SESSION['error'] = "Username/password mismatch";
        header('Location: index.php');
      }

      //If correct, redirect to todo app

    }

  }
  else if($_POST['type']==="create")
  {
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $create = new Create($username, $email, $password);
    try {
      $create->create();
      header('Location: home.php');
    } catch (Exception $e) {
      $_SESSION['error'] = $e->getMessage();
      header('Location: index.php');
    }

  }
  else if($_POST['type']==="reset")
  {
    //todo mail for reset
  }

}
