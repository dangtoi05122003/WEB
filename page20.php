<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DXT</title>
</head>
<body>
    <?php
        $items = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
        foreach($items as $item)
        {
            echo "<img src='images/item' width = 50px height = 50px alt ='$item'>";
        }
    ?>
    <h1>2121050429</h1>
    <?php
        $items = array('item5.png', 'item6.png');
        foreach ($items as $item)
        {
            echo "<img src='images/$item' width = 50px height = 50px alt ='$item>"; 
        }
    ?>
        
</body>
</html>