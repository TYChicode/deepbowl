<?php
    //連結資料庫
    $servername = "127.0.0.1";
    $username = "chi";
    $password = "r0952365649";
    $dbname = "deepbowl";

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    echo $dbname;
?>