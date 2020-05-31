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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="../js/coremain.js"></script>
    <script src="../js/daygridmain.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../html/Home.php" style="font-size: 25px;">電影院訂票系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="../html/home.php">電影介紹<span
                            class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="">空位查詢</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/booking.php">線上訂票</a> </li>
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
                    <h2>院線熱映</h2>
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="../html/movie_introduce/久美子的奇異旅程.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/久美子的奇異旅程.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>久美子的奇異旅程</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/偷窺.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/偷窺.jpg" class="img-responsive center-block" alt="Cinque Terre"
                                            width="256" height="192">
                                        <h3>偷窺</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/冰雪奇緣.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/冰雪奇緣.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>冰雪奇緣</h3>
                                    </a>

                                </td>
                                <td>
                                    <a href="../html/movie_introduce/安眠醫生.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/安眠醫生.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>安眠醫生</h3>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <h2>即將上映</h2>
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="../html/movie_introduce/尖峰人生暫停一下.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/尖峰人生暫停一下.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>尖峰人生暫停一下</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/情書.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/情書.jpg" class="img-responsive center-block" alt="Cinque Terre"
                                            width="256" height="192">
                                        <h3>情書</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/我的蛋糕師情人.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/我的蛋糕師情人.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>我的蛋糕師情人</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/是誰在造神.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/是誰在造神.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>是誰在造神</h3>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <h2>本週排行</h2>
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="../html/movie_introduce/樓下的房客.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/樓下的房客.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>樓下的房客</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/殺手保鑣.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/殺手保鑣.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>殺手保鑣</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/返校.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/返校.jpg" class="img-responsive center-block" alt="Cinque Terre"
                                            width="256" height="192">
                                        <h3>返校</h3>
                                    </a>
                                </td>
                                <td>
                                    <a href="../html/movie_introduce/特種部隊.php"
                                        style="text-decoration:none;color: black;">
                                        <img src="../img/特種部隊.jpg" class="img-responsive center-block"
                                            alt="Cinque Terre" width="256" height="192">
                                        <h3>特種部隊</h3>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <script
        src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script
        src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/popper.min.js"></script>
    <script
        src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/bootstrap-4.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>