<?php
    require 'connect.php';
    $sql = "INSERT INTO flight (origin,destination,duration) VALUES ('Hà Nội', 'Paris', '4000')";
    $conn->query($sql);
    $conn->close();
?>