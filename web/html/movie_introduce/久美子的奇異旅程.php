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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../html/Home.php" style="font-size: 25px;">電影院訂票系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
        class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="../home.php">電影介紹<span
                    class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="">空位查詢</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../booking.php">線上訂票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../change.php">退換票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../booking_record.php">查詢訂票紀錄</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../SingUp.php">登入/註冊</a> </li>
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
                                        <img src="../../img/久美子的奇異旅程.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <h3>
                                        <?php
                                            require_once('Connectsql.php');
                                            $sql = "SELECT *  FROM `movie_information` WHERE `id` = 2";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) { // 大於零代表有這個資料。
                                                while ($row = $result->fetch_assoc()) {
                                                    echo $row["name"]."<br>";
                                                }
                                            }else {
                                                echo "0 results";
                                            }
                                        ?>
                                    </h3>
                                    <a>
                                        <?php
                                            require_once('Connectsql.php');
                                            $sql = "SELECT *  FROM `movie_information` WHERE `id` = 2";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) { // 大於零代表有這個資料。
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "演員 : ".$row["actor"]."<br>"."導演 : ".$row["director"]."<br>"."發行公司 : ".$row["publisher"]."<br>".
                                                    "電影分級 : ".$row["rating"]."<br>"."片長 : ".$row["time"]."分"."<br>"."上映日期 : ".$row["ReleaseDate"]."<br>";
                                                }
                                            }else {
                                                echo "0 results";
                                            }
                                        ?>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>劇情簡介</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eWhfQDF2OPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div>
                        <?php
                            require_once('Connectsql.php');
                            $sql = "SELECT *  FROM `movie_information` WHERE `id` = 2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { // 大於零代表有這個資料。
                                while ($row = $result->fetch_assoc()) {
                                    echo $row["introduction"]."<br>";
                                }
                            }else {
                                echo "0 results";
                            }
                            mysqli_close($conn);
                        ?>
                    </div>
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