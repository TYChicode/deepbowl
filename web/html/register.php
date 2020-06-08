<?php
    require_once('Connectsql.php');
    
    $username = $_POST['uname']; // 填入帳號密碼
    $phone = $_POST['phone'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pw = $_POST['pw'];

    if ($password===$pw){
        $sql = "SELECT `email` FROM `account_information` WHERE `email`='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) { // 大於零代表有這個資料。
            echo '這個 e-mail:' . $email . ' 已經註冊過';
        } else {
            $sql = "INSERT INTO `account_information` (`email`, `password`, `identity`) VALUES ('$email', '$password', '使用者')"; 
            if ($conn->query($sql) === TRUE) {
                //echo '你的帳號已成功新增。username：'. $username;
                $sql = "INSERT INTO `customer_information` (`id`, `name`, `email`, `PhoneNumber`, `IDnumber`) VALUES (NULL, '$username', '$email', '$phone', '$id')"; 
                if ($conn->query($sql) === TRUE) {
                    echo '你的帳號已成功新增。username：'. $username;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    else {
        echo("<script>alert('請確定資訊填寫正確')</script>");
        echo("<script>window.location = 'SignUp.php';</script>");
    }
    mysqli_close($conn);
?>