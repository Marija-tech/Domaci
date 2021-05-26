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
        echo "<table border='1' width='300px'>";
        for($i=1; $i<=3; $i++){
            echo "<tr style='height:30px'"."'width:50px'>";
            $firstNum = 1;
            $secondNum = 3;
            for($j=1; $j<=4; $j++){
                $firstNum = $i*2;
                $secondNum = $j*3;
                echo "<td>$firstNum - $secondNum</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
