<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Napisati fju koja od niza reči pravi html listu kao meni... 
        Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  -->

    <?php
        $a = array("potop", "ana", "palindrom", "ratar", "zadatak", "domaci");

        function makeList($a){
            echo "<ul>";
            foreach($a as $e){
                echo "<li>$e</li>";
            }
            echo "</ul>";
        }

        makeList($a);

    ?>
    <br>
    <?php

        makeList($oznacen);
    ?>
</body>
</html>