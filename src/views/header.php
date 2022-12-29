<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅遊指南</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../../assets/CSS/index.css">
    <link rel="stylesheet" href="../../assets/CSS/conduct.css">
    <link rel="stylesheet" href="../../assets/CSS/user.css">
    <link rel="stylesheet" href="../../assets/CSS/practice.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#">旅遊指南</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">美食</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">住宿</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./src/photoshare/index.php">旅遊相片</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown"
                            aria-expanded="false">景點</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">北部景點</a></li>
                            <li><a class="dropdown-item" href="#">中部景點</a></li>
                            <li><a class="dropdown-item" href="#">南部景點</a></li>
                            <li><a class="dropdown-item" href="#">東部景點</a></li>
                            <li><a class="dropdown-item" href="#">離島景點</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="drop-down">
                    <li>
                        <?php if (isset($_SESSION['userName'])) { ?>
                        <a href="../api/user/login.php">登出</a>
                        <?php } else { ?>
                        <a href="../user/login.php">登入</a>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if (isset($_SESSION['userName'])) { ?>
                        <h5><?php echo $_SESSION['userName'] ?>
                        </h5>
                        <?php } else { ?>
                        <a href="../user/register.php">註冊</a>
                        <?php } ?>
                    </li>
                </ul>
                <form role="search" action="./src/controllers/search.php" method="GET" class="d-flex">
                    <input class="form-control me-2 w-75" type="search" placeholder="搜尋" aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-success" type="submit">搜尋</button>
                </form>
            </div>
        </div>
    </nav>