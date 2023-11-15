<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2121050429</title>
</head>
<body>
    <?php
        echo "the game";

        if (isset($_GET["response"])) {
            if ($_GET["response"] == "yes") {
                echo " has been quitted";
            } elseif ($_GET["response"] == "no") {
                echo " will be continued in 3 seconds";
            } else {
                echo " has an invalid response";
            }
        } else {
            echo " has been quited";
        }

        echo "<br>after if statement";
    ?>
</body>
</html>