<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>2121050429</title>
</head>
<body>
    <?php
        echo "zakart";

        if (isset($_GET["response"])) {
            if ($_GET["response"] == "yes") {
                echo " has been quitted";
            } else {
                echo " will be continued in 3 seconds";
            }
        }

        echo "<br>after if statement";
    ?>
</body>
</html>