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
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/conduct.css">
    <script src="./JS/list.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-default navbar-dark ">
        <div class="container-fluid">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">旅遊指南</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">景點</a>
                        <ul id="menu">
                            <li>北部景點</li>
                            <li>中部景點</li>
                            <li>南部景點</li>
                            <li>東部景點</li>
                            <li>離島景點</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">美食</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">住宿</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">搜尋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./photoshare/index.html">旅遊相片</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">留言板</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>

    <div class="row area">
        <div class="col-lg-6">
            <!--這裡要放圖-->
        </div>
        <div class="col-lg-6">
            <div class="viewname">
                   <!--景點名稱-->
            </div>
            <div class="viewintroduce">
                    <!--景點介紹-->
            </div>
        </div>
    </div>
    <div class="area">
        <table>
            <tbody>
                <tr>
                    <th class="mytbody ttitle">按讚數</th>
                    <th class="mytbody num"></th>
                    <th class="mytbody ttitle">不喜歡數</th>
                    <th class="mytbody num"></th>
                    <th class="mytbody ttitle">評價</th>
                    <th class="mytbody num"></th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="area">
        <table>
            <thead class="mythead2">
                <tr>
                    <th>評論區</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!--評論-->
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>