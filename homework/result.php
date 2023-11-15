<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả kiểm tra yêu cầu vào công ty</title>
</head>
<body>
    <?php
        if (isset($_GET['gender']) && isset($_GET['weight']) && isset($_GET['height'])) {
            $gender = $_GET['gender'];
            $weight = $_GET['weight'];
            $height = $_GET['height'];

            $required_height = ($gender == 'Nam') ? 160 : 150;
            $required_weight = ($gender == 'Nam') ? 50 : (($weight >= 40 && $weight <= 70) ? $weight : -1);

            echo "<h1>Kết quả kiểm tra yêu cầu vào công ty</h1>";

            if ($height >= $required_height && $weight >= $required_weight) {
                echo "Bạn đáp ứng yêu cầu vào công ty.";
            } else {
                echo "Bạn không đáp ứng yêu cầu vào công ty.";
            }
        } else {
            echo "<h1>Lỗi</h1>";
            echo "Vui lòng điền đầy đủ thông tin.";
        }
    ?>
</body>
</html>