<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->

    <?php
        $z = [12, 8, 0, 5, 2];

        function no_zeros($array) {
            $found = true;
            foreach($array as $key) {
                if ($key === 0) {
                    $found = false;
                    break;
                }
            }
            return $found;
           
        }

        echo no_zeros($z);
        
        
         
        
             
    ?>
</body>
</html>