<?php
    require_once('Connectsql.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT `email` FROM `account_information` WHERE `email`='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) { // 大於零代表有這個資料。
        $sql = "SELECT `password` FROM `account_information` WHERE `email`='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $pw = $result->fetch_assoc();
            if ($password === $pw["password"]){
                setcookie("logined",1,"time()+3600");
                setcookie("email",$email,"time()+3600");
                echo("<script>alert('登入成功')</script>");
                echo("<script>window.location = 'home.php';</script>");
            }
            else {
                echo '帳號密碼錯誤';
            }
        }
        else {
            echo '讀取失敗';
        }
    } else {
        echo '<br>查無此e-mail : ' . $email . '<br>請先註冊';
    }

    mysqli_close($conn);
?>