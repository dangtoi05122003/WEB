<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2121050429</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $db = "mydb";
        $conn = new mysqli($severname, $username, $password, $db);
        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }
        echo "connected succesfully <br>";
    ?>
</body>
</html>