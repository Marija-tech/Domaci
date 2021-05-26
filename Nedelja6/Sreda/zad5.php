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
        function createDivs($n, $m){
            $i=1;
            while($i<=$n){
                echo "<div>";
                $j=1;
                while($j<=$m){
                    echo "<span>$j</span><br>";
                    $j++;
                }
                echo "</div>";
                $i++;
            }
        }
        createDivs(5, 4);
    ?>
</body>
</html>