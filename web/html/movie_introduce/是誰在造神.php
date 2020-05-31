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
                <li class="nav-item active"> <a class="nav-link" href="../html/home.html">電影介紹<span
                    class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="">空位查詢</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/booking.html">線上訂票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/change.html">退換票</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/booking_record.html">查詢訂票紀錄</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/SingUp.html">登入/註冊</a> </li>
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
                                        <img src="../../img/是誰在造神.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <a style="text-decoration:none;color: black;">
                                        <h3>是誰在造神</h3>
                                        <h5>演員 : 班佛斯特、克里斯奧多德、李培斯、達斯汀霍夫曼</h5>
                                        <h5>導演 : 史蒂芬·佛瑞爾斯</h5>
                                        <h5>發片公司 : CatchPlay</h5>
                                        <h5>電影分級 : </h5>
                                        <h5>類型 : 體育電影/劇情</h5>
                                        <h5>片長 : 103分</h5>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>劇情簡介</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/ZL-PAb8pXwk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div>
                        <a>文字簡介</a>
                        <a>遲來的守護者》導演史蒂芬佛瑞爾斯爭議新作，《X戰警：最後戰役》班佛斯特、《雨人》奧斯卡影帝達斯汀霍夫曼主演。本片根據真實事件改編，一個體育專欄作家堅信連續七年獲得環法自行車冠軍的車手蘭斯阿姆斯壯有在比賽期間使用禁藥，因此承諾將不惜一切找出證據將真相公諸於世。

                            1993年，環法賽最年輕的新秀、來自美國的藍斯阿姆斯壯，與來自愛爾蘭的報社體育記者大衛華許因為專訪結緣，大衛對藍斯的求勝心印象深刻，但對他的實力保持觀望態度；一心想超越極限的藍斯，意外接觸到專門以「特殊手段」訓練單車選手的義大利醫生米契。藍斯在晴天霹靂般被診斷出睪丸癌後，讓他正要爬坡衝刺的運動生涯，一路被推到谷底，經過手術與化療，他努力想要回歸自行車賽界，但元氣大傷的身體已無法支撐他的野心，藍斯轉向米契求助，透過藥物跟更嚴格的訓練，藍斯不但東山再起，還以超人般的體能狀態連續7次贏得環法賽冠軍。
                            
                            求生的意志，讓藍斯願意嘗試所有手段；求勝的意志，讓他決心摧毀所有擋路的人事物。抗癌英雄與單車之神的光環，讓藍斯名利雙收，成為媒體瘋狂追逐的寵兒，但這一切看在大衛眼裡，除了驚嘆更多了懷疑，對於嚴格的藥檢與記者的追查，藍斯只能設下更大更危險的布局，讓他跟所有參與的共犯順利脫身，但當人性的陰暗蓋過如日中天的光芒，藍斯阿姆斯壯的傳奇，正一步步駛向毀滅的危境。
                            
                            影片到阿爾卑斯山、及法國有名的滑雪度假勝地阿普杜耶（Alpe d’Huez）拍攝，該地也是環法自行車大賽最重要的山頭之一，被喻為「要贏得環法的關鍵在阿普杜耶」，《王者之聲》、《悲慘世界》攝影大師丹尼柯恩（Danny Cohen）此次創造新的拍攝視角，在拍攝賽程時，大量使用近鏡頭，讓電影增添緊繃充滿懸疑的風格。
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