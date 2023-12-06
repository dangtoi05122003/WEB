<?php
    require 'connect.php';
    $sql = "INSERT INTO flights (Origin,Destination,Duration) VALUES (N'Hà Nội', N'Paris', 4000";
    if ($conn->query($sql) === TRUE)
    {
        echo "New flight created succesfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    conn->close();
?>

