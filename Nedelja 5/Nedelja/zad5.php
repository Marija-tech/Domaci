<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>3. Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.</p>
    <?php
        $i=30;
        while($i<=99){
            $a = substr($i, 0, 1);
            $b = substr($i, 1, 1);
            //echo "$a $b";
            if($a % 3 != 0 and $b % 4 != 0){
                echo "$i <br>";
            }
            $i++;
        }
    ?>
</body>
</html>