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
        foreach ($items as $item1)
        foreach ($items as $item2)
        foreach ($items as $item3)
        foreach ($items as $item4)
        {
            echo "<img src='https://static.vinwonders.com/production/dia-diem-chup-anh-dep-o-ha-noi-banner.jpg' width='50px' height='50px' alt='$item1'>";
            echo "<img src='https://static.vinwonders.com/production/dia-diem-chup-anh-dep-o-ha-noi-1.jpg?_ga=2.221676952.1020231492.1701171565-369382928.1701171565' width='50px' height='50px' alt='$item2'>";
            echo "<img src='https://static.vinwonders.com/production/dia-diem-chup-anh-dep-o-ha-noi-2.jpg' width='50px' height='50px' alt='$item3'>";
            echo "<img src='https://static.vinwonders.com/production/dia-diem-chup-anh-dep-o-ha-noi-4.jpg?_ga=2.267774222.1020231492.1701171565-369382928.1701171565' width='50px' height='50px' alt='$item4'>";
        }
    ?>
</body>
</html>