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
                                        <img src="../../img/尖峰人生暫停一下.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <a style="text-decoration:none;color: black;">
                                        <h3>尖峰人生暫停一下</h3>
                                        <h5>演員 : 法布萊斯魯奇尼、蕾拉班克堤</h5>
                                        <h5>導演 : 海爾威米姆蘭</h5>
                                        <h5>發片公司 : 安可電影</h5>
                                        <h5>電影分級 : </h5>
                                        <h5>類型 : 喜劇劇情片/喜劇</h5>
                                        <h5>片長 : 100分</h5>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>劇情簡介</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/sYVtJXjis1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div>
                        <a>《尖峰人生暫停一下》（A man in a hurry）改編自法國標緻雪鐵龍（PSA）集團前任CEO克里斯蒂安斯泰夫（Christian Streiff）真人真事。

                            描述嚴苛的工作狂總裁在辦公室午睡醒來後，竟意外中風，語言能力與記憶力皆因此受損，並遭公司無預警解雇，經歷漫長的復健，他不僅重拾家庭生活、50天走完1500公里的朝聖之路，也對人生多了一份從容，而如今的他又重返商場，擔任全球前三大航太集團──賽峰（Safran S.A.）企業監理會副主席。
                            
                            不僅如此，斯泰夫更將他的經歷寫成暢銷書《勇氣：標緻雪鐵龍總裁從頂峰墜落的歸零人生》，成為法國醫界大力推薦的最佳勵志書籍。
                            
                            《尖峰人生暫停一下》由法國喜劇名導海爾威米姆蘭（Hervé Mimran）執導，由威尼斯影帝法布萊斯魯奇尼（Fabrice Luchini）飾演管理23萬員工的CEO，因為一場大病喪失語言能力，當他腦中想說「您好」嘴上卻說成「再見」，因此鬧出不少笑料。搭檔演出的則是凱撒獎女星蕾拉班克堤（Leila Bekhti），她在片中飾演語言治療師，與法布萊斯魯奇尼有多場精彩對手戲。
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