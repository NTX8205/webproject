<?php

use App\Model\User;

require '../../models/users.php';
require '../../../vendor/autoload.php';
session_start();
$user = new User();
if (isset($_SESSION['userName'])) {
    unset($_SESSION['userName']);
    header('Location: ../../../src/views/article/list.php');
} else {
    $email = $_POST['emailAddress'];
    $password = $_POST['password'];
    $statement = $user->userLogin($email);
    $username = $statement['userName'];
    $password_hash = $statement['password'];
    $pass  = password_verify($password, $password_hash);
    if ($pass) {
        $_SESSION['userName'] = $username;
        header('Location: ../../../src/views/articles/list.php');
    } else {
        echo '<h1><p style="text-align: center;">登入失敗</p></h1>
                <p style="text-align: center;">1秒後返回登入頁面</p>';
        echo '<meta http-equiv="refresh" content="1;url=../../views/users/login.php">';
    }
}
