<?php

session_start();
$_SESSION['uid']=6;
define('BP', '/repos/todoApp');

require 'app/code/rajnish/Database/Database.php';
require 'app/code/rajnish/Database/ManageUsers.php';
require 'app/code/rajnish/Todo/Db.php';
require 'app/code/rajnish/Login/Create.php';
