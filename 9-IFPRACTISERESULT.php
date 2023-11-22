<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2121050429</title>
</head>
<body>
    <?php
        $USD = 22300;
        $EUR = 27300;
        $SGD = 17000;
        $JPY = 120;
        $amount = isset($_GET['amount']) ? $_GET['amount'] : 0;
        $currency = isset($_GET['currency']) ? $_GET['currency'] : '';

        echo "$amount USD is equal ";
        
        if ($currency == "USD")
        {
            echo $amount * $USD;
        }
        elseif ($currency == "EUR") {
            echo $amount * $EUR;
        }
        elseif ($currency == "SGD") {
            echo $amount *  $SGD;
        }
        else
        {
            echo $amount * $JPY;
        }
    ?>
</body>
</html>