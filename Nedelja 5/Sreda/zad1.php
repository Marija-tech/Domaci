<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat. -->

<?php
     $firstName = 'Stefan';
     $secondName = 'Ana';
 
    function printLongestName($name1, $name2) {
        if (strlen($name1) > strlen($name2)) {
            return $name1;
            }
        elseif (strlen($name1) < strlen($name2)) {
            return $name2;
            }
        else {
            return "$name1 i $name2 su iste duzine";
        }
    }
 
    echo printLongestName($firstName, $secondName);
?>
</body>
</html>