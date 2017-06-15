<?php

require '../Database/ManageUsers.php';

class Create
{

  private $email;
  private $username;
  private $password;

  public function __construct($username, $email, $password){
    $this->email=$email;
    $this->username=$username;
    $this->password=$password;
  }

  public function create(){
    $user = new ManageUsers();
    if($user->existUsername($this->username)){
      echo "exists username";
      //throw new Exception("Username exist", 1);
    }

    if($user->existEmail($this->email)){
      echo "email exists";
      //throw new Exception("Email exist", 1);
    }
  }

}

$create = new Create('rajnish', 'rajnishmsrit@gmail.com', 'test');
//var_dump($create);

$create->create();
?>
