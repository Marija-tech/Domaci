<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function createDiv($n){
            
            $i=1;
            while($i<=$n){
                echo "<div>";
                echo "<span>$i</span>";
                echo "</div>";
                $i++;
            }    
            return;      
        }
        createDiv(5);
    ?>
</body>
</html>