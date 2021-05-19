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
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $d = $_GET['d'];

        echo "<p> $a $b $c $d</p>";
       
        if($b > $a and $d > $c){
            $prvi_zbir=0;
            if($a % 4 == 0){
                $prvi_zbir += $a;
            }
            if($b % 4 == 0){
                $prvi_zbir += $b;
            }
            $drugi_zbir=0;
            if($c % 3 == 0){
                $drugi_zbir += $c;
            }
            if($d % 3 == 0){
                $drugi_zbir += $d;
            }
            if($prvi_zbir > $drugi_zbir){
                echo "<p>$prvi_zbir</p>";
            }else{
                echo "<p>$drugi_zbir</p>";
            }
        }else{
            die("<p>Uslov nije ispunjen!</p>");
        }
    ?>
    
</body>
</html>