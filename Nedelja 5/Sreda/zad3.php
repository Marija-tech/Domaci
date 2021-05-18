<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji. -->
    <?php
        $firstName = 'Milos';
        $secondName = 'Aleksandra';
     
        function printNames($name1, $name2) {
            if (strlen($name1) > strlen($name2)) {
                echo "<p style='color:red'>$name1</p>";
                echo "<p style='color:green'>$name2</p>";
            }
            elseif (strlen($name1) < strlen($name2)) {
                echo "<p style='color:green'>$name1</p>";
                echo "<p style='color:red'>$name2</p>";
            }
            else {
                echo "$name1 i $name2 su iste duzine";
            }
        }
     
        printNames($firstName, $secondName);
    ?>

</body>
</html>