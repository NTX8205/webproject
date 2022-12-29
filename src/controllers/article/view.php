<?php

session_start();
use App\Model\Article;
use App\Model\User;

require '../../models/users.php';
require "../../models/article.php";
require '../../../vendor/autoload.php';

$id = $_GET['id'];
$article = new Article();
$users = new User();
$statement = $article->viewArticle($id);
if (isset($_SESSION['userName'])) {
    $user = $users->findUser($_SESSION['userName']);
}
include("../../views/articles/view.php");
