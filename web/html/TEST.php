<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>遺光計畫</title>
    <!-- Bootstrap -->
    <link href="../css/home.css" rel="stylesheet">
    <link href="../css/test.css" rel="stylesheet">
    <!-- jQuery v1.9.1 -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Moment.js v2.20.0 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
    <!-- FullCalendar v3.8.1 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.print.css" rel="stylesheet" media="print">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>


<body style="font-family: Microsoft JhengHei; font-size: 17px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../html/Home.html" style="font-size: 25px;">遺光計畫</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
        class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="../html/Festival.html">祭典介紹<span
              class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/SingUp.html">活動報名</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/group.html">族群介紹</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/map.html">旅遊地圖</a> </li>
            </ul>
        </div>
    </nav>
    <header>
        <div id="demo" class="carousel slide" data-ride="carousel" style="width: 600px; margin: auto;">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>


            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </header>
    <section style="font-family: Microsoft JhengHei;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mt-2 text-center">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--日曆-->
                <div id="example" class="col-lg-6 col-md-6 col-sm-12"></div>
                <script>
                    $("#example").fullCalendar({
                        // 參數設定[註1]
                        header: { // 頂部排版
                            left: "title", // 左邊放置上一頁、下一頁和今天
                            center: "", // 中間放置標題
                            right: " today prev,next" // 右邊放置月、周、天
                        },
                        defaultDate: "2019-12-12", // 起始日期
                        weekends: true, // 顯示星期六跟星期日
                        editable: true, // 啟動拖曳調整日期
                        events: [ // 事件
                            { // 事件
                                title: "約會",
                                start: "2019-12-01"
                            }, { // 事件(包含開始時間)
                                title: "中餐",
                                start: "2019-12-12T12:00:00"
                            }, { // 事件(包含跨日開始時間、結束時間)
                                title: "音樂節",
                                start: "2019-12-07",
                                end: "2019-12-10"
                            }, { // 事件(包含開始時間、結束時間)
                                title: "會議",
                                start: "2019-12-12T10:30:00",
                                end: "2019-12-12T12:30:00"
                            }, { // 事件(設定連結)
                                title: "Click for Google",
                                url: "http://google.com/",
                                start: "2019-12-28"
                            }
                        ]
                    });
                </script>
                <!---->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!--第一格-->
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="card-title">活動資訊</h4>
                            <a href="http://www.tipp.org.tw/events_article.asp?F_ID=93933&PageSize=15&Page=1&startTime=&endTime=&FT_No=&NSubject_No=&SelectSubject=&Subject_No=&SubSubject_No=&TA_No=&Orderby=&KeyWords=&Order=&IsSelect=" class="card-link" style="color: rgb(92, 43, 43);">2020「VuVu的生活記憶」兒童寒假特別活動</a><br>
                            <a href="http://www.tipp.org.tw/events_article.asp?F_ID=92453&PageSize=15&Page=1&startTime=&endTime=&FT_No=&NSubject_No=&SelectSubject=&Subject_No=&SubSubject_No=&TA_No=&Orderby=&KeyWords=&Order=&IsSelect=" class="card-link" style="color: rgb(92, 43, 43);">【主題書展】臺灣原住民族歷史事件</a><br>
                            <a href="http://www.tipp.org.tw/events_article.asp?F_ID=93961&PageSize=15&Page=1&startTime=&endTime=&FT_No=&NSubject_No=&SelectSubject=&Subject_No=&SubSubject_No=&TA_No=&Orderby=&KeyWords=&Order=&IsSelect=" class="card-link" style="color: rgb(92, 43, 43);">陷阱:2019高雄國際貨櫃藝術節</a><br>
                        </div>

                        <!--地二格-->
                        <div class="card bg-light">
                            <div class="card-body">
                                <h4 class="card-title">新聞快訊</h4>
                                <a href="http://www.tipp.org.tw/news_article.asp?F_ID=94136" class="card-link" style="color: rgb(92, 43, 43);">台東專學 可望培育首位在地國際攀樹師</a><br>
                                <a href="http://www.tipp.org.tw/news_article.asp?F_ID=94135" class="card-link" style="color: rgb(92, 43, 43);">無視縣府停工要求 業者違法使用南田原保地</a><br>
                                <a href="http://www.tipp.org.tw/news_article.asp?F_ID=94134" class="card-link" style="color: rgb(92, 43, 43);">原文會第四屆董事長出爐 瑪拉歐斯當選</a><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="button-container">
            <h2>登入/註冊</h2>
            <form action="confirm.php" method="post">
                <div class="form-group">
                    <div class="col">
                        <label for="sel1">請選擇你要參與的活動</label>
                        <select class="form-control" id="sel1">
          <option>達悟族-豐年祭</option>
          <option>賽夏族-矮靈祭</option>
          <option>卑南族-猴祭</option>
          <option>布農族-射耳祭</option>
        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <label for="uname">姓名:</label>
                        <input type="text" class="form-control" id="uname" placeholder="請輸入您的姓名" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <label for="phone">電話:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="請輸入您的手機" name=" phone" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <label for="id">身分證字號(外籍旅客請輸入護照號碼):</label>
                        <input type="text" class="form-control" id="id" placeholder="請輸入身分證字號/護照號碼" name="id" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="請輸入Email" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <div class="col">
                        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="check" required> 已確認報名資訊填寫無誤
          <div class="valid-feedback">點選送出按鈕</div>
          <div class="invalid-feedback">確認填寫無誤後請勾選</div>
                    </label>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">送出</button>
                </div>
            </form>

            <article>
                <h2>登入/註冊</h2>
                <form action="cancel.php" method="post">
                    <div class="form-group">
                        <div class="col">
                            <label for="sel1">請選擇你要參與的活動</label>
                            <select class="form-control" id="sel1">
          <option>達悟族-豐年祭</option>
          <option>賽夏族-矮靈祭</option>
          <option>卑南族-猴祭</option>
          <option>布農族-射耳祭</option>
        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <label for="uname">姓名:</label>
                            <input type="text" class="form-control" id="uname" placeholder="請輸入您的姓名" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <label for="phone">電話:</label>
                            <input type="tel" class="form-control" id="phone" placeholder="請輸入您的手機" name=" phone" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <label for="id">身分證字號(外籍旅客請輸入護照號碼):</label>
                            <input type="text" class="form-control" id="id" placeholder="請輸入身分證字號/護照號碼" name="id" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="請輸入Email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <div class="col">
                            <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="check" required> 已確認報名資訊填寫無誤
          <div class="valid-feedback">點選送出按鈕</div>
          <div class="invalid-feedback">確認填寫無誤後請勾選</div>
                    </label>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">送出</button>
                    </div>
                </form>
        </div>
        </article>
    </section>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright © MyWebsite. All rights reserved.</p>
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