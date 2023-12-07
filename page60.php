<?php
    require 'connect.php';
    $sql = "SELECT * FROM flight";
    $result = $conn->query($sql);
    print_r($result);
    $row = $result->fetch_assoc();
    echo "<br>";
    print_r($row);
    $row = $result->fetch_assoc();
    echo "<br>";
    print_r($row);
    $conn->close();
?>