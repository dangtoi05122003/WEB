<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--DXT-->
<body>
    <?php
        if (isset($_GET['currency'])) {
            $currency = $_GET['currency'];
            echo " $amount $currency is equal ";
            switch ($currency) {
                case "USD":
                    echo $amount * $USD;
                    break;
                case "EUR":
                    echo $amount * $EUR;
                    break;
                case "SGD":
                    echo $amount * $SGD;
                    break;
                case "JPY":
                    echo $amount * $JPY;
                    break;
            }
        }
    ?>
</body>
</html>