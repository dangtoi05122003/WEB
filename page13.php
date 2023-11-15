<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2121050429</title>
</head>
<body>
    <?php
        echo "Zakart";

        if (isset($_GET["response"])) {
            if ($_GET["response"] == "yes") {
                echo " is not trying to learn PHP";
            } elseif ($_GET["response"] == "no") {
                echo " will be continued in 3 seconds";
            } else {
                echo " has not a valid";
            }
        } else {
            echo " is trying to learn php";
        }

        echo "<br>2023-2024";
    ?>
</body>
</html>