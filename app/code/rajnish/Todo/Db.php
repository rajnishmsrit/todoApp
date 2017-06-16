<?php
/**
*
*/
class Db
{
  public $link;

  function __construct()
  {
    $db_connection = new Database();
    $this->link = $db_connection->connect();
    return $this->link;
  }

  function addTodo($uid, $task, $tags, $progress, $due_date){
    $created = date("Y-m-d H:i:s");
    $query=$this->link->prepare("INSERT into todo(uid, task, tags, progress, due_date, created, updated) values(?, ?, ?, ?, ?, ?, ?)");
    $values = array($uid, $task, $tags, $progress, $due_date, $created, $created);
    $query->execute($values);
    $count = $query->rowCount();
    return $count;
  }

  function getTodoByUser($uid){
    $query=$this->link->prepare("select task, tags, progress, due_date from todo where uid=".$uid." order by updated desc");
    $query->execute();
    $data = $query->fetchALL(PDO::FETCH_ASSOC);
    return $data;
  }

  function getTodoByLabelByUser($label){
    $ip = $_SERVER['REMOTE_ADDR'];
    $datetime = date("Y-m-d H:i:s");
    $query=$this->link->prepare("INSERT into users(username, password, email, ip, datetime) values(?, ?, ?, ?, ?)");
    $values = array($username, $password, $email, $ip, $datetime );
    $query->execute($values);
    $count = $query->rowCount();
    return $count;
  }

  function updateTodo($username, $password){
    $password = md5($password);
    $query=$this->link->prepare("select * from users where username='$username' and password='$password'");
    $query->execute();
    $count = $query->rowCount();
    return $count;
  }

  function deleteTodo($email){
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

//$todo = new Db();
//var_dump($todo->getTodoByUser());
//echo $todo->addTodo("test", "label", 12, "123546");
