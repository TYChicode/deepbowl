<?php
    //連結資料庫
    $servername = "36.234.0.40";
    $username = "open";
    $password = "0000";
    $dbname = "deepbowl";

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    echo $dbname;
?>