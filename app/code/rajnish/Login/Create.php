<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/repos/todoApp/config.php';

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

    if($user->existEmail($this->email)){
      throw new Exception("Email exist.");
    }

    if($user->existUsername($this->username)){
      throw new Exception("Username exist.");
    }

    return $user->registerUser($this->username, md5($this->password), $this->email);

  }

}

//$create = new Create('rajnish', 'rajnishmsrit@gmail.com', 'test');
//var_dump($create);
//$create->create();
?>
