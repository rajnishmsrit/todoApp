<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/repos/todoApp/config.php';
/**
*
*/
class ManageUsers
{
  public $link;

  /**
   * [__construct description]
   */

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function registerUser($username, $password, $email){
    $ip = $_SERVER['REMOTE_ADDR'];
    $datetime = date("Y-m-d H:i:s");
    $query=$this->link->prepare("INSERT into users(username, password, email, ip, datetime) values(?, ?, ?, ?, ?)");
    $values = array($username, $password, $email, $ip, $datetime );
    $query->execute($values);
    $count = $query->rowCount();
    return $count;
  }

  function verifyUser($username, $password){
    $password = md5($password);
    $query=$this->link->prepare("select * from users where username='$username' and password='$password'");
    $query->execute();
    $count = $query->rowCount();
    return $count;
  }

  function resetUser($email){
    //Reset account and send an email
  }

  function existUsername($username){
    //Check if a $username exists;
    $query=$this->link->prepare("select * from users where username='$username'");
    $query->execute();
    $count = $query->rowCount();
    return $count;
  }

  function existEmail($email){
    //Check if a account with $email exists;
    $query=$this->link->prepare("select * from users where email='$email'");
    $query->execute();
    $count = $query->rowCount();
    return $count;
  }
}

