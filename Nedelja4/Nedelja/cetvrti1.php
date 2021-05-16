<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $imeprezime = $_GET['imeprezime'];

        //echo $imeprezime;
        //echo "<br>";

        $inicijalime = substr($imeprezime, 0, 1);
        //echo $inicijalime;
        echo "<br>";

        $razmak = strpos($imeprezime, ' ', 0);
        //echo $razmak;
        echo "<br>";

        $inicijaliprez = substr($imeprezime, $razmak + 1, 1);
        //echo $inicijaliprez;

        $veliko_ime = strtoupper($inicijalime);
        $veliko_prez = strtoupper($inicijaliprez);

        echo $veliko_ime . '.';
        echo $veliko_prez . '.';

    ?>
</body>
</html>