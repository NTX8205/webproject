<?php

session_start();

use App\Model\User;
use App\Model\Article;

require '../../model/users.php';
require "../../model/article.php";
require '../../../vendor/autoload.php';
$user = new User();
$article = new Article();
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($_SESSION['userName'])) {
    $userStatement = $user->findUser($_SESSION['userName']);
    $articleStatement = $article->addArticle($title, $content, $userStatement['id']);
    header('Location: ../../../../views/articles/list.php');
} else {
    header('Location: ../../../../views/users/login.php');
}
