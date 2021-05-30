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
        function returnLarger($num1, $num2, $num3){
            if($num1 > $num2 and $num1 > $num3){
                echo "$num1";
            }elseif($num2 > $num1 and $num2 > $num3){
                echo "$num2";
            }elseif($num3 > $num1 and $num3 > $num2){
                echo "$num3";
            }else{
                echo "Brojevi $num1, $num2 i $num3 su isti.";
            }
            return;
        }

        returnLarger(2, 204, 19);
    ?>
</body>
</html>