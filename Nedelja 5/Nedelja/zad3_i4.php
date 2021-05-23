<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ZADATAK 1: -->
    <p>1. Ispisati brojeve od 20 do 1 preko while ciklusa.</p>
    <?php
        $i=1;
        while($i<=20){
            echo $i;
            echo "<br>";
            $i++;
        }
    ?>
<!-- ZADATAK 2: -->
    <p>2. Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.</p>
    <?php
        $i = 30;
        $sum = 1;
        while($sum <= 100000){
            $sum = $sum * $i;
            $i--;
        }
        echo "<span style='color:red'>$sum</span><br>";
        echo "<span style='color:green'>".($i + 1)."</span><br>";
    ?>
</body>
</html>