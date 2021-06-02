<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
    b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
    c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
    d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. -->

    <?php
        function getNumbers(){
            $a = $_GET['numbers'];
            $n = explode(" ", $a); 
            return $n;
        }

        $x = getNumbers();
        echo join(" ", $x); 
        echo "<br>";

        $array = [2, 10, 23, 22, 110, 82];

        function evenNumbers($array){
            $num = 0;
            $k = count($array);
            $thereIs = false;
            for($i=0; $i<$k; $i++){
                if($array[$i] % 2 == 0){
                    $num++;
                }
                if($num >= 3){
                    $thereIs = true;
                }
            }
            return " $thereIs ";
        }
       
        echo evenNumbers($array);
        echo "<br>";
       
        function lesserThan1000($array){
            $da = true;
            $k = count($array);
            for($i=0; $i<$k; $i++){
                if($array[$i] > 1000){
                    $da = false;
                }
            }
            return "<span>$da</span>";
        }

        echo lesserThan1000($array);
        echo "<br>";
        
        $b = evenNumbers($x);
        $d = lesserThan1000($x);

        function third($x, $b, $d){
            $yes = true;
            $r = count($x);
            for($i=0; $i<$r; $i++){
                if($b == false and $d == false){
                    $yes = false;
                }
            }        
            return $yes;
        }
        $t = third($x, $b, $d);

        echo $t;
    ?>

</body>
</html>