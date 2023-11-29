<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2121050429</title>
</head>
<body>
    <?php
        function display_image_list($imageList)
        {
            foreach ($imageList as $item)
            {
                echo "<img src='images/$item'
                width = 50px height = 50px alt ='$item'>";
            }
        }
        $items = array('item1.png', 'item2.png',
                        'item3.png', 'item4.png');
        display_image_list($items);
    ?>
    <h1> 2121050429</h1>
    <?php
        $items = array('item5.png', 'item6.png');
        display_image_list($items);
    ?>
                        
</body>
</html>