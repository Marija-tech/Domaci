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
        $x = [
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];

        /*  1. Dodati u gornji niz jos 4 osobe po zelji.
            2. Napisati fju koja prikazuje imena svih programera.
            3. Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s. */


        array_push($x,
            ['ime' => 'Nikola', 'godine'=>29, 'grad'=>'Vranje', 'pozicija'=>'menadzer'],
            ['ime' => 'Jovan', 'godine'=>35, 'grad'=>'Negotin', 'pozicija'=>'programer'],
            ['ime' => 'Stefan', 'godine'=>33, 'grad'=>'Nis', 'pozicija'=>'dizajner'],
            ['ime' => 'Milica', 'godine'=>25, 'grad'=>'Nis', 'pozicija'=>'programer'],
        );

        print_r($x);
        echo "<br>";
        
        function programeri($x){
            for($i=0; $i<count($x); $i++){
                if($x[$i]['pozicija'] == 'programer'){
                    echo "<div>".$x[$i]['ime']."</div>";
                }
            }
        }
        $pr = programeri($x);
        echo $pr;
        echo "<br>";
        
        
        function osoba($x){
            foreach($x as $osoba){
                if(strpos(strtolower($osoba['ime']), 's') !== false){
                    echo "<p>Ima slovo s ".$osoba['ime']."</p>";
                }
            }
        }
       
        osoba($x);

    ?>
</body>
</html>