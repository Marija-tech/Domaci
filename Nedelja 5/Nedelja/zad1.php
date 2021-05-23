<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)</p>
    <?php
            $a = "Marija";
            $b = "Popovic";

        function imePrezime($a, $b){
            echo "<p><span>$a</span> <span>$b</span></p>";
        }
      
        $slova_imena = strlen($a);
        $slova_prezimena = strlen($b);

        $zbir = $slova_imena + $slova_prezimena;

        for($i=1; $i<=$zbir; $i++){
            imePrezime($a, $b);
        }

    ?>

</body>
</html>