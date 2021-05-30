<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo  palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul". -->
    <?php
        $a = array("potop", "ana", "palindrom", "ratar", "zadatak", "domaci");
       
        function palindrom($a){
            foreach($a as $ind => $value){
                if($value === strrev($value)){
                    echo " $value ";
                }
            }
        }

        palindrom($a);

    ?>

</body>
</html>