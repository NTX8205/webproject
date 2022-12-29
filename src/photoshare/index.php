<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>益嘉旅遊分享區</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../assets/JS/main.js"></script>
    <link rel="stylesheet" href="../../assets/CSS/index.css">
    <link rel="stylesheet" href="../../assets/CSS/photoshareindex.css>
    <link rel="stylesheet" href="../../assets//CSS/conduct.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">旅遊指南</a>
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
                        <a class="nav-link" href="./index.php">旅遊相片</a>
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
                <form role="search" action="./src/controllers/search.php" method="GET" class="d-flex">
                    <input class="form-control" type="search" placeholder="搜尋" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">搜尋</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container h-100 " style="margin-top: 7%;">
        <h1 class="text-center m-5 he">相片列表</h1>
        <div class="text-center m-5 category-container">
            <button type="button" class="btn btn-secondary" id="0">所有照片</button>
            <button type="button" class="btn btn-secondary" id="1">北部</button>
            <button type="button" class="btn btn-secondary" id="2">中部</button>
            <button type="button" class="btn btn-secondary" id="3">南部</button>
        </div>
        <div class="row align-items-center h-100 ">
            <div class="col h-25">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="card-container">
                    <!-- 卡片放這裡 -->
                </div>
            </div>
        </div>
    </div>
    <footer>
        Copyright ©
        <?php echo date("Y-m-d") ?> All Rights Reserved.<br>
    </footer>
</body>

</html>