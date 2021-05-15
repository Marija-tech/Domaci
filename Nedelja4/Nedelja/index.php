<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-size: 25px;
    }
    .green{
        color: green;
    }
    .red{
        color: red;
    }  
</style>
<body>
<!-- INLINE STYLE -->

    <?php
        $a = mt_rand(1, 20);
        echo "$a<br>";
        $b = mt_rand(1, 20);
        echo $b;
        
        if($a === $b){
            echo '<br>$a i $b su jednaki brojevi: '.$a;
        }elseif($a > $b){
            echo "<br><span style='color:green'>$a je veci broj!</span>";
            echo "<span style='color:red'>$b je manji broj!</span>";
        }
        else{
            echo "<br><span style='color:green'>$b je veci broj!</span>";
            echo "<span style='color:red'>$a je manji broj!</span>";
        }
        echo "<br>";
        
    ?>
<br>
<!-- BOJA PREKO KLASE -->
    <?php
        $a = mt_rand(1, 20);
        echo "$a<br>";
        $b = mt_rand(1, 20);
        echo $b;
        
        if($a > $b){
            echo "<p class='green'>$a je veci broj!</p>";
            echo "<p class='red'>$b je manji broj!</p>";
        }else{
            echo "<p class='green'>$b je veci broj!</p>";
            echo "<p class='red'>$a je manji broj!</p>";
        }
    ?>
</body>
</html>