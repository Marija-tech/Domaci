<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti).  -->
    <?php
        $a = [1, 5, 4, 10];

        $s = 0;
        for($i=0; $i<count($a); $i++){
            $s += $a[$i];
        }
        //echo " $s ";
        $c = count($a);

        $a_sredina = $s / $c;
        echo "Aritmeticka sredina brojeva ".join(", ", $a)." je $a_sredina ";



    ?>
</body>
</html>