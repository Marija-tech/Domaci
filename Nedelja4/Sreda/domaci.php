<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prvi PHP domaci!</title>
</head>
<body>
    <div>Prvi zadatak:<br>
        <?php
            $p_jedan = 200;
            $p_dva = 80;


            $zbir = $p_jedan + $p_dva;
            $razlika = $p_jedan - $p_dva;
            $proizvod = $p_jedan * $p_dva;
            $kolicnik = $p_jedan / $p_dva;

            echo "$zbir<br>";
            echo "$razlika<br>";
            echo "$proizvod<br>";
            echo "$kolicnik<br>";
        ?>
    </div>
    <div>Drugi zadatak:<br>
        <?php
            $a = 6;
            $b = 8;
            $c = 4;

            $zbir = $a + $b + $c;

            echo "Zbir brojeva 6, 8 i 4 je 18<br>";
            echo "Zbir brojeva $a, $b i $c je $zbir";

        ?>
    </div>
</body>
</html>