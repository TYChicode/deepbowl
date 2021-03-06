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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="../html/home.php">電影介紹<span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/booking.php">線上訂票</a> </li>
                <li class="nav-item active"> <a class="nav-link" href="../html/change.php">退換票</a> </li>
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

    </section>

    <div class="container">
        <h3>退換票</h3>
        <table class="table table-striped">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        require_once('Connectsql.php');
                        $email = $_COOKIE["email"];
                        $sql = "SELECT `id` FROM `customer_information` WHERE `email` LIKE '$email'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();

                        $id = $row["id"];
                        $sql = "SELECT *  FROM `order_information` WHERE `customer_id`='$id'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) { // 大於零代表有這個資料。
                        $row = $result->fetch_assoc();
                        $fare = $row["fare"];
                        $time = $row["time"];
                        $seat = $row["seat_id"];
                        $session = $row["session"];

                        $sql = "SELECT `name` FROM `deepbowl`.`cinema_information` WHERE `id` = " . $row["cinema_id"];
                        $result = $conn->query($sql);
                        $row1 = $result->fetch_assoc();
                        $cinema = $row1["name"];

                        $sql = "SELECT `name` FROM `deepbowl`.`theater_information` WHERE `id` = " . $row["theater_id"];
                        $result = $conn->query($sql);
                        $row2 = $result->fetch_assoc();
                        $theater = $row2["name"];

                        echo '<td>';
                        echo '<a>交易序號 : ' . $row["id"] . '</a>';
                        echo '<br>影城 : ' . $theater;
                        echo '<br>金額 : ' . $fare;
                        echo '</td>';
                        echo '<td>';
                        echo '<a>交易時間 : ' . $time . '</a>';
                        echo '<br>座位 : ' . $cinema . ' - ' . $seat;
                        echo '<br>場次 : ' . $session;
                        echo '</td>';
                    } else {
                        echo ("<script>alert('查無訂票紀錄')</script>");
                        echo ("<script>window.location = 'home.php';</script>");
                    }

                        mysqli_close($conn);
                        ?>
                    </td>
                    <td>
                        <div class="col">
                            <button onclick="refund()" type="submit" class="btn btn-primary">換票</button>

                            <br><button onclick="refund()" type="submit" class="btn btn-primary">退票</button>
                            <!--call Refund php-->
                            <script>
                                function refund() {
                                    window.location ='refund.php';
                                }
                            </script>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <p style="font-size: 10px;">Copyright © MyWebsite. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/popper.min.js"></script>
    <script src="file:///C|/Users/User/AppData/Roaming/Adobe/Dreamweaver 2020/zh_TW/Configuration/Temp/Assets/eam20EE.tmp/js/bootstrap-4.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>