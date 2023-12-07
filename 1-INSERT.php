<?php
    require 'connect.php';
    $sql = "INSERT INTO flight (origin, destination, duration) VALUES (N'Hà Nội', N'Paris', 4000)";
    if ($conn->query($sql) === TRUE) {
        echo "New flight created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>