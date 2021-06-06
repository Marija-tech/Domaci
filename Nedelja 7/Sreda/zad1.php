<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green{
            color: green;
        }

        .red{
            color: red;
        }
    </style>
</head>
<body>
    <!-- Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->
    <?php
        $array = ["domaci", "zadatak", "niz", "element", "rec"];
 
        $new_arr = [];
        foreach($array as $value){
            if(strlen($value) > 5){
                $new_arr[] = "<span class='green'>".$value."</span>";
            }else{
                $new_arr[] = "<span class='red'>".$value."</span>";
            }
        }

        echo print_r($new_arr, 1);
        


    ?>
</body>
</html>