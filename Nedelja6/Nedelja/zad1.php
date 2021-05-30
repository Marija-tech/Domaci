<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for) -->
    <?php
        $a = [12, 102, 217, 33, 206, 511, 799];
        $counter = count($a);
        
        function izbroji($x, $counter){
            $num2 = 0;
            $num3 = 0;
            for($i=0; $i<$counter; $i++){
                if(strlen($x[$i]) == 2){
                    $num2++;
                }elseif(strlen($x[$i]) == 3){
                    $num3++;
                }
                // echo "$num2 i $num3";
            }
            if($num2 > $num3){
                echo "<p>Ima vise dvocifrenih brojeva ($num2 > $num3)</p>";
            }elseif($num3 > $num2){
                echo "<p>Ima vise trocifrenih brojeva ($num3 > $num2)</p>";
            }else{
                echo "<p>Ima podjednak broj dvocifrenih i trocifrenih brojeva.</p>";
            }
        }

        izbroji($a, $counter);
    ?>
</body>
</html>