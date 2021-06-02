<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti -->


    <?php
        $s = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak'=>28];

        function uspesnost($s){
            $max = $s['ponedeljak'];
            $k = "ponedeljak";
            foreach($s as $key=>$value){
                if($max < $value){
                    $max = $value;
                    $k = $key;
                }
            }
            echo "$k je najuspesniji dan";
        }

        uspesnost($s);
        echo "<br>";

        function prosek($s){
            $k = count($s);
            $z = 0;
            foreach($s as $key=>$value){
                $z += $value;     
            }
            $p = $z / $k;
            echo $p;
        }

        prosek($s);
        echo "<br>";

       
    ?>

</body>
</html>