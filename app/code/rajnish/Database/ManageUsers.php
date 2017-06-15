<?php

require 'Database.php';
/**
*
*/
class ManageUsers
{
  public $link;

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function registerUsers($username, $password){
    $query=$this->link->prepare("INSERT into users(username, password, datetime) values(?,?,?)");
    $values = array($username, $password, date("Y-m-d H:i:s"));
    $query->execute($values);
    $counts = $query->rowCount();
    return $counts;
  }

  function verifyUsers($username, $password){
    $query=$this->link->prepare("select * from users where username='$username' and password='$password'");

    //$values = array($username, $password);
    $query->execute();
    $counts = $query->rowCount();
    if($counts===1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}

