<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="prvi">
        <span style=color:red;><?="RED"?><span><br>
        <span style=color:green;><?="GREEN"?><span>
    </div>
    <!-- ili ovaj nacin -->
    <div class="drugi">
        <?php
            $crvena = "RED";
            $zelena = "GREEN";

        ?>
        <span style=color:red;><?=$crvena?><span><br>
        <span style=color:green;><?=$zelena?><span>
    </div>

    <a href="../zadatak_3/index.php">LINK ZA DRUGI ZADATAK<br>
</body>
</html>