<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
        (nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
        (nastavak) Ako je uslov ispunjen, izračunati
        zbir onih brojeva od prvog do drugog koji su deljivi sa 4,
        pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3.
        Prikazati koji je zbir veći.</p>

    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $d = $_GET['d'];

        echo "<p> $a $b $c $d</p>";
        
        //funkcije:
        function zbir1($a, $b){
            $zbir1 = 0;
            for($i=$a; $i<=$b; $i++){
                if($i % 4 == 0){
                    $zbir1 += $i;
                }
            }
            return $zbir1;        
        }
        

        function zbir2($c, $d){
            $zbir2 = 0;
            for($i=$c; $i<=$d; $i++){
                if($i % 3 == 0){
                    $zbir2 += $i;
                }
            }
            return $zbir2;
        }
         
        $z1 = zbir1($a, $b);
        $z2 = zbir2($c, $d);

        //uslov:
        if($b < $a and $d < $c){
            die("<p>Uslov nije ispunjen!</p>");
        }else{
            if($z1 > $z2){
                echo "Veci zbir je $z1 (zbir deljivih sa 4)";
            }
            else{
                echo "Veci zbir je $z2 (zbir deljivih sa 3)";
            }
        }
    ?>
</body>

</html>