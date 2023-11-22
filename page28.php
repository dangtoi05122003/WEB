<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DXT</title>
</head>
<body>
    <?php
        $exchangeRate = array(22300, 27300, 17000, 120);
        $exchangeRate[] = 600;
        $exchangeRate[] = 16000;
        $exchangeRate[] = 22200;
        echo "<h3>Exchange Rate to rate to VND</h3>";
        echo "USD: $exchangeRate[0]<br>";
        echo "EUR: $exchangeRate[1]<br>";
        echo "SGD: $exchangeRate[2]<br>";
        echo "JPY: $exchangeRate[3]<br>";
        echo "CHN: $exchangeRate[4]<br>";
        echo "AUD: $exchangeRate[5]<br>";
    ?>
</body>
</html>