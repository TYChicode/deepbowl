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
        <a class="navbar-brand" href="../html/Home.html" style="font-size: 25px;">電影院訂票系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
        class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="../html/home.php">電影介紹<span
                    class="sr-only">(current)</span></a> </li>
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
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="" style="text-decoration:none;color: black;">
                                        <img src="../../img/樓下的房客.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <a style="text-decoration:none;color: black;">
                                        <h3>樓下的房客</h3>
                                        <h5>演員 : 任達華、莊凱勛、李康生、邵雨薇、游安順、何潔柔、李杏、侯彥西、森竣</h5>
                                        <h5>導演 : 崔震東</h5>
                                        <h5>發片公司 : 威視股份有限公司</h5>
                                        <h5>電影分級 : </h5>
                                        <h5>類型 : 劇情/奇幻</h5>
                                        <h5>片長 : 110分</h5>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>劇情簡介</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/16wN3-PcDJo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div>
                        <a>繼承出租公寓的遊民（任達華 飾），張貼招租布告：不要家世清白的乖乖牌學生、不要收支穩定的上班族、不要勤儉質樸的小家庭，只要「正常人」，像任何符合正常定義，擁有混亂潛質的正常人，能滿足他偷窺正常面具下的黑暗面的正常人。

                            因此，有家暴前科的好色體育老師老張（莊凱勛 飾）、黏在網上的大學生柏彥（侯彥西 飾）、失婚的王先生（游安順 飾）和純潔像天使的王小妹（何潔柔 飾）、神秘作家穎如（邵雨薇 飾）、Gay令狐（森竣 飾）和郭力（李康生 飾）、劈腿兼不倫的上班尤物陳小姐（李杏 飾），六個房間、八個房客與一個房東，揭露出不為人知的祕密以及難以克制的慾望。
                            </a>
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