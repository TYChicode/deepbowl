<?php
    require_once('Connectsql.php');
    $email = $_COOKIE["email"];
    $sql = "SELECT `id` FROM `customer_information` WHERE `email` LIKE '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row["id"];

    if ($conn->query($sql) === TRUE) {
        $sql = "Delete *  FROM `order_information` WHERE `customer_id`='$id'";
        echo("<script>alert('刪除完成')</script>");
        echo("<script>window.location = 'SingUp.php';</script>");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
?>