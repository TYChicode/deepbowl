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
                                        <img src="../../img/我的蛋糕師情人.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <a style="text-decoration:none;color: black;">
                                        <h3>我的蛋糕師情人</h3>
                                        <h5>演員 : 莎拉阿德勒、提姆卡爾克霍夫、桑德拉薩德、羅伊米勒</h5>
                                        <h5>導演 : 歐佛勞爾葛雷澤</h5>
                                        <h5>發片公司 : 安可電影</h5>
                                        <h5>電影分級 : </h5>
                                        <h5>類型 : 劇情</h5>
                                        <h5>片長 : 113分</h5>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>劇情簡介</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/vcqsoiwyBJ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div>
                        <a>《我的蛋糕師情人》（The Cakemaker）自卡羅維瓦利影展首映後，不僅奪下評審團獎，讓全球30多個影展趨之若鶩，在以色列上映時更狂吸13萬觀影人次，就連好萊塢片商也聞香而來買下翻拍版權。

                            《我的蛋糕師情人》（The Cakemaker）描述柏林的年輕蛋糕師傅湯瑪斯、從耶路撒冷來柏林出差的帥氣熟男歐倫，兩人因黑森林蛋糕結緣，並成為一對戀人，歐倫在家鄉有妻小，只有每月到柏林出差時才能與他相聚。有一天湯瑪斯得知歐倫在家鄉意外身亡的消息，他來到歐倫的家鄉耶路撒冷，並隱瞞身份、留在男友遺孀安娜開的咖啡廳打工，沒想到他做的糕點大受顧客歡迎，讓小店一舉成為遠近馳名的名店，美味蛋糕不僅撫平了湯瑪斯與安娜的悲傷，兩人的心也越來越靠近，直到安娜發現湯瑪斯的真實身份…。
                            
                            導演歐佛勞爾葛雷澤（Ofir Raul Graizer）作品曾入選坎城「導演雙週」單元，新片《我的蛋糕師情人》則改編自己的人生故事，橫跨柏林、耶路撒冷兩地拍攝，文化與宗教的衝突讓電影更具戲劇張力。導演葛雷澤除電影專業外，平時的興趣就是兼差教授廚藝，在《我的蛋糕師情人》將德式傳統糕點拍得香味四溢，療癒片中角色以及觀眾的心。被美國綜藝報大讚「溫柔、觸動人心、甜度恰如其分。」權威媒體PLAYLIST也稱讚本片「細膩動人，在電影中嚐到了濃烈情感。」
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