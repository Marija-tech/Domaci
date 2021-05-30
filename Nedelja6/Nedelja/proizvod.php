<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fender Mustang Bass Shop</title>
</head>
<body>
<!-- Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊) za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse. -->
    <?php
        function createDiv($product){
            echo "<div class='d1'>";
            echo "<img src='".$product[0]."' alt='bass guitar'>";
            echo "<p>".$product[1]."</p>";
            if($product[3] > 0){
                $dcount = $product[2] - (($product[2]*$product[3]) / 100);
                echo "<p class='red'>Price:".$product[2]."</p>";
                echo "<p class='price2'>Discount price:".$dcount."</p>";
            }else{
                echo "<p class='price1'>Price:".$product[2]."</p>";

            }
            echo "</div>";
        }

        
    ?>
</body>
</html>
