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

        $ime = $_GET ['ime'];
        $prezime = $_GET ['prezime'];

        $inicijal_ime = substr($ime , 0 , 1);
        $inicijal_prezime = substr($prezime , 0 , 1);

        $i_i = strtoupper($inicijal_ime);
        $i_p = strtoupper($inicijal_prezime);
        
        echo $i_i .'.';
        echo $i_p .'.';
    ?>
</body>
</html>