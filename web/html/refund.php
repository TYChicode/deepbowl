<?php
    require_once('Connectsql.php');
    $email = $_COOKIE["email"];
    $sql = "SELECT `id` FROM `customer_information` WHERE `email` LIKE '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $id = $row["id"];
    $sql = "Delete *  FROM `order_information` WHERE `customer_id`='$id'";
    $result = $conn->query($sql);

    mysqli_close($conn);
?>