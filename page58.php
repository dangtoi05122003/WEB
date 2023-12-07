<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flight";
    $result = $conn ->query($sql);
    print_r($result);
    $conn->close();
?>