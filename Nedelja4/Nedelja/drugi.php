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
        $a = mt_rand(1, 30);
        $b = mt_rand(1, 30);
        $c = mt_rand(1, 30);
        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        

        if($a > $b and $a > $c){
            if($b > $c){
                echo "$c $b $a";
            }else{
                echo "$b $c $a";
            }
        }
        if($b > $a and $b > $c){
            if($a > $c){
                echo "$c $a $b";
            }else{
                echo "$a $c $b";
            }
        }
        if ($c > $b and $c > $a){
            if($a > $b){
                echo "$b $a $c";
            }else{ 
                echo "$a $b $c";
            }
        }

    ?>
</body>
</html>