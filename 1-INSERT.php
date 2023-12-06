<<<<<<< HEAD
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

=======
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

>>>>>>> 58011221429aaad65015e1731d5a3a7f9849fef1
