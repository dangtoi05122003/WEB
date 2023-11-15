<!DOCTYPE html>
<html lang="en" dir="utf-8">
    <head>
        <meta charset="utf-8">
        <title>DXT</title>
    </head>
    <body>
    <?php
        $T = true;
        $F = false;
        echo "T = $T <br>";
        echo "F = $F <br>";

        $check1 = 10 > 5;
        $check2 = 20 < 10;
        $check3 = $check1 && $check2;
        $check4 = $check1 || $check2;
        echo "check1 = $check1 <br>";
        echo "check2 = $check2 <br>";
        echo "check3 = $check3 <br>";
        echo "check4 = $check4";
    ?>
    </body>
</html>