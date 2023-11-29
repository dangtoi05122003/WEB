<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DXT</title>
</head>
<body>
<?php
    function display_image_list($imageList)
    {
        foreach ($imageList as $item)
        {
            echo "<img src ='images/$item' width = 50px height = 50px alt ='$item'>";
        }
    }
?>
    <?php
        require('13-function.php');
        $item = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
        display_image_list($item);
    ?>
</body>
</html>