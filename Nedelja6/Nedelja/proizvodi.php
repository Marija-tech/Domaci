<?php
    require ('proizvod.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .d1{
            width: 200px;
            display: inline-block;
            text-align: center;
            vertical-align: top;
            
        }

        img{
            width: 200px; height: 200px;
            
        }

        .price2{
            color: green;
        }

        .red{
            color: red;
        }

    </style>
</head>
<body>
    <?php
        $vintera = ["vintera.jpg", "Fender Vintera '60s Mustang Bass in Fiesta Red", 799.99, 10];
        $limited = ["ltd.jpg", "Fender Limited Edition Mustang Bass, Shell Pink", 599.99, 0 ];
        $performer = ["fender-american-performer.jpg", "Fender American Performer Mustang Bass RW SSFG", 916.99, 15];

        createDiv($vintera);
        createDiv($limited);
        createDiv($performer);
    ?>
</body>
</html>