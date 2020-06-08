<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>電影院訂票系統</title>
    <!-- Bootstrap -->
    <link href="../css/home.css" rel="stylesheet">
    <link href="../css/coremain.css" rel="stylesheet" />
    <link href="../css/daygridmain.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="../js/coremain.js"></script>
    <script src="../js/daygridmain.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid']
            });
            calendar.render();
        });
    </script>
</head>

<style>
    h3 {
        font-family: Microsoft JhengHei;
    }
</style>

<body style="font-family: Microsoft JhengHei; font-size: 17px;">
    <!-- check whether logined or not -->
    <?php
    if ($_COOKIE["logined"] != 1) {
        echo ("<script>alert('請先登入')</script>");
        echo ("<script>window.location = 'SingUp.php';</script>");
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../html/Home.php" style="font-size: 25px;">電影院訂票系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
        class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="../html/home.php">電影介紹<span
                    class="sr-only">(current)</span></a> </li>
                <li class="nav-item active"> <a class="nav-link" href="../html/booking.php">線上訂票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/change.php">退換票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/booking_record.php">查詢訂票紀錄</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/SingUp.php">登入/註冊</a> </li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mt-2 text-center">
                    <h2></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="" style="text-decoration:none;color: black;">
                                        <img src="../img/久美子的奇異旅程.jpg" class="img-responsive center-block" alt="Cinque Terre" width="384" height="543">
                                    </a>
                                </td>
                                <td>
                                <form action="booking.php" method="post">
                                    <a style="text-decoration:none;color: black;">
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">電影</label>
                                                <select class="form-control" id="sel1">
                                                    <?php
                                                        require_once('Connectsql.php');

                                                        $email = $_COOKIE["email"];
                                                        $sql = "SELECT `id` FROM `customer_information` WHERE `email` LIKE '$email'";
                                                        $result = $conn->query($sql);
                                                        $row = $result->fetch_assoc();
                                                        //$sql = "SELECT *  FROM `order_information` WHERE `customer_id`='$id'";
                                                        //$result = $conn->query($sql);
                                                    ?>

                                        <option>久美子的奇異旅程</option>
                                        <option>冰雪奇緣</option>
                                        <option>安眠醫生</option>
                                        <option>尖峰人生暫停一下</option>
                                      </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">影城</label>
                                                <select class="form-control" id="sel3">
                                        <option>白日夢影城</option>
                                        <option>向日葵影城</option>
                                        <option>太陽花影城</option>
                                        <option>作夢影城</option>
                                      </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">日期與場次</label>
                                                <select class="form-control" id="sel4">
                                        <option>2020-06-09</option>
                                        <option>2020-06-10</option>
                                        <option>2020-06-11</option>
                                        <option>2020-06-12</option>
                                      </select>
                                            </div>
                                        </div>
                                        <h5>影廳 : </h5>
                                        <h5>剩餘座位 : </h5>
                                        <h5>—————————</h5>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">訂購張數</label>
                                                <select class="form-control" id="sel5">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                      </select>
                                            </div>
                                        </div>
                                        <h5>未選張數 : </h5>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">清除</button>
                                            <button type="submit" class="btn btn-primary">送出</button>
                                        </div>

                                    </a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>座位圖</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 10px;">Copyright © MyWebsite. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap"s JavaScript plugins) -->
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/popper.min.js"></script>
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/bootstrap-4.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>