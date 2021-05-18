<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime. -->
    <?php
        $firstName = 'Jovica';
        $secondName = 'Iva';
     
        function printLongestName($name1, $name2) {
            if (strlen($name1) > strlen($name2)) {
                echo $name1;
            }
            elseif (strlen($name1) < strlen($name2)) {
                echo $name2;
            }
            else {
                echo "$name1 i $name2 su iste duzine";
            }
        }
     
        printLongestName($firstName, $secondName);


    ?>
</body>
</html>