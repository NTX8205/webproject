<?php

require '../../models/users.php';
require '../../../vendor/autoload.php';
use App\Model\User;

$users = new User();
$email = $_POST['emailAddress'];
$password = $_POST['password'];
$user = $_POST['userName'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$statement = $users->userRegister($user, $email, $password_hash);
header('Location: ../../../src/user/login.php');
