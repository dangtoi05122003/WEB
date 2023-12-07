<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $origin = $_POST["origin"];
    $destination = $_POST["destination"];
    $duration = $_POST["duration"];

    require 'connect.php';

    $sql = "INSERT INTO flight(origin, destination, duration) VALUES ('$origin', '$destination', '$duration')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>

<!-- Form nhập dữ liệu -->
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .border {
        border: 1px solid #ccc;
        padding: 20px;
        max-width: 400px;
    }

</style>

<div class="container">
    <div class="border">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form">
                <label for="origin" style="font-weight: bold; display: block; margin-bottom: 10px;">Origin:</label>
                <input type="text" class="form-control" name="origin" id="origin" style="border-radius: 5px; padding: 10px;">
            </div>

            <div class="form">
                <label for="destination" style="font-weight: bold; display: block; margin-bottom: 10px;">Destination:</label>
                <input type="text" class="form-control" name="destination" id="destination" style="border-radius: 5px; padding: 10px;">
            </div>

            <div class="form">
                <label for="duration" style="font-weight: bold; display: block; margin-bottom: 10px;">Duration:</label>
                <input type="text" class="form-control" name="duration" id="duration" style="border-radius: 5px; padding: 10px;">
            </div>

            <button type="submit" class="btn btn-primary" style="border-radius: 5px; padding: 10px; width: 100%;">Thêm dữ liệu</button>
        </form>
    </div>
</div>