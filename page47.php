<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DXT</title>
</head>
<body>
    <?php
        require 'connect.php';
        $sql = "INSERT INTO flights (Origin,Destionation,Duration) VALUES ('Hà Nội', 'Paris', '4000')";
        $conn->query($sql);
        $conn->close();
    ?>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DXT</title>
</head>
<body>
    <?php
        require 'connect.php';
        $sql = "INSERT INTO flights (Origin,Destionation,Duration) VALUES ('Hà Nội', 'Paris', '4000')";
        $conn->query($sql);
        $conn->cloe();
    ?>
>>>>>>> 58011221429aaad65015e1731d5a3a7f9849fef1
