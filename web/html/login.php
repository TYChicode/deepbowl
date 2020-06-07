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
                sleep(3);
                header("Location: home.php"); 
                echo '登入成功，3秒後為您跳轉';
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