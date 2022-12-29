<?php

use App\Model\Article;

require '../../../vendor/autoload.php';
include("../../views/header.php");
$id = $_GET['id'];
$article = new Article();
$statement = $article->editArticle($id);
include("../../views/article/edit.php");
?>
<html>
    <link rel="stylesheet" type="text/css" href="../../../assets/CSS/practice.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/CSS/article/edit.css">
</html>