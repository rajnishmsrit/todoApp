<?php

session_start();
require 'app/code/rajnish/Database/ManageUsers.php';

if(isset($_POST)){
  //var_dump($_POST);

  //Verify the kind of form
  if(empty($_POST['username']) || empty($_POST['password'])){
    $_SESSION['error'] = "Some mandatory fields are blank";
    header('Location: index.php');
  }else{
    //User is Validated
    //Todo DB Check Query

    $username= $_POST['username'];
    $password= $_POST['password'];

    $users = new ManageUsers();
    //echo $users->registerUsers("rajnish", "password");

    //Gets Success when verified
    if($users->verifyUsers($username, $password))
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
