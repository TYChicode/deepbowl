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
        <a class="navbar-brand" href="" style="font-size: 25px;">電影院訂票系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
        class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="../html/search_booking_record.php">查詢訂票紀錄</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/search_return_record.php">查詢退票紀錄</a> </li>
                <li class="nav-item"> <a class="nav-link" href="../html/search_change_record.php">查詢換票紀錄</a> </li>
                <li class="nav-item active"> <a class="nav-link" href="../html/movie_edit.php">編輯電影場次</a> </li>
                <li class="nav-item"> <a class="nav-link" href="">登入/註冊</a> </li>
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
            <h3>編輯電影場次</h3>
            <div class="row">
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="" style="text-decoration:none;color: black;">
                                        <img src="../img/久美子的奇異旅程.jpg" class="img-responsive center-block" alt="Cinque Terre" width="256" height="192">
                                    </a>
                                </td>
                                <td>
                                    <a style="text-decoration:none;color: black;">
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="uname">電影:</label>
                                                <input type="text" class="form-control" id="moviename" placeholder="請輸入電影名稱" name="uname" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">日期</label>
                                                <select class="form-control" id="sel1">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="sel1">影城</label>
                                                <select class="form-control" id="sel2">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col">
                                                <label for="uname">場次:</label>
                                                <input type="text" class="form-control" id="time" placeholder="請輸入場次 " name="uname " required>
                                                <div class="valid-feedback ">Valid.</div>
                                                <div class="invalid-feedback ">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col ">
                                                <label for="sel1 ">影城</label>
                                                <select class="form-control " id="sel3">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col ">
                                                <label for="uname ">總座位數:</label>
                                                <input type="text " class="form-control " id="seat" placeholder="請輸入座位數 " name="uname " required>
                                                <div class="valid-feedback ">Valid.</div>
                                                <div class="invalid-feedback ">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <button type="submit " class="btn btn-primary ">新增</button>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>場次</h3>
                    <h5>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h5>
                    <h5>XX月XX日</h5>
                    <h5>------------------------------------------------------------</h5>
                    <h5>XX:XX X廳---------------------------------------------------</h5>
                    <div class="col ">
                        <button type="submit " class="btn btn-primary ">編輯</button>
                        <button type="submit " class="btn btn-primary ">刪除</button>
                    </div>
                    <h5>XX:XX X廳---------------------------------------------------</h5>
                    <div class="col ">
                        <button type="submit " class="btn btn-primary ">編輯</button>
                        <button type="submit " class="btn btn-primary ">刪除</button>
                    </div>
                    <h5>XX月XX日</h5>
                    <h5>------------------------------------------------------------</h5>
                    <h5>XX:XX X廳---------------------------------------------------</h5>
                    <div class="col ">
                        <button type="submit " class="btn btn-primary ">編輯</button>
                        <button type="submit " class="btn btn-primary ">刪除</button>
                    </div>
                    <h5>XX:XX X廳---------------------------------------------------</h5>
                    <div class="col ">
                        <button type="submit " class="btn btn-primary ">編輯</button>
                        <button type="submit " class="btn btn-primary ">刪除</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="text-center ">
        <div class="container ">
            <div class="row ">
                <div class="col-12 ">
                    <p style="font-size: 10px; ">Copyright © MyWebsite. All rights reserved.</p>
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