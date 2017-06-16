<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/repos/todoApp/config.php';

session_start();
$_SESSION['success'] = "Added task";
header("Location: ../../home.php");

