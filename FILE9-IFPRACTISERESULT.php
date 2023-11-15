<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2121050429</title>
</head>
<body>
    <?php
        $USD = 22300;
        $EUR = 27300;
        $SGD = 17000;
        $JPY = 120;
        $amount = $_GET['amount'];
        echo "$amount USD is equal ";
        if ($_GET["currency"] == "USD") {
            echo $amount * $USD;
        } elseif ($_GET["currency"] == "EUR") {
            echo $amount * $EUR;
        } elseif ($_GET["currency"] == "SGD") {
            echo $amount * $SGD;
        } elseif ($_GET["currency"] == "JPY") {
            echo $amount * $JPY;
        }
        echo " VND";
    ?>
</body>
</html>