<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $longAccount = 10.000.429;
        echo "so tien trong tai khoan long: $longAccount";
        $HUMGpay = 10.000.000;
        echo "HUMG chuyen tien: $HUMGpay";
        $longAccount = $longAccount + $HUMGpay;
        echo "so tien trong tai khoan long: $longAccount";
    ?>
</body>
</html>