<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table , tr , td {
            border: 1px solid black;
            font-size: 30px;
            text-align: center;
            border-collapse: collapse;
            padding: 2px;
        }
    </style>
</head>
<body>
    <?php
        $prva_cifra = mt_rand(1, 10);
        $druga_cifra = mt_rand(1, 10);
        $treca_cifra = mt_rand(1, 10);

        $prvi_kv = $prva_cifra**2;
        $drugi_kv = $druga_cifra**2;
        $treci_kv = $treca_cifra**2;
    ?>
    <table>
        <tr>
            <td><?=$prva_cifra?></td>
            <td><?=$prvi_kv?></td>
        </tr>
        <tr>
            <td><?=$druga_cifra?></td>
            <td><?=$drugi_kv?></td>
        </tr> 
        <tr>
            <td><?=$treca_cifra?></td>
            <td><?=$treci_kv?></td>
        </tr>
    </table>

    
</body>
</html>