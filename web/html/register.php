<?php
    require_once('Connectsql.php');
    $username = $_POST['uname']; // 填入帳號密碼
    $password = $_POST['password'];
    $sql = "SELECT `username` FROM `users` WHERE `username`='$username'";
    $result = $conn->query($sql);
    if ($username === '' or $password === '') {
        echo '帳號或密碼沒有填入';
    } else if ($result->num_rows > 0) { // 大於零代表有這個資料。
        echo '這個 username:' . $username . ' 已經註冊過';
    } else {
        $sql ="INSERT INTO `users`(`username`, `password`) VALUES ('$username' ,'$password')"; 
        $conn->query($sql);
        echo '你的帳號以成功新增。username：'. $username;
    }
?>