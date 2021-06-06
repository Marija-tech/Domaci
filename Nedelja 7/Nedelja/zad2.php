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
        /*  1. Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
            2. Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
            3. Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) */

        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];
           
        $godineStaza = array_map(function($osoba){
            $osoba['godine_staza'] = [];
            for($i=0; $i<count($osoba); $i++){
            $osoba['godine_staza'] = mt_rand(1, 3);       
            }
            return $osoba;
        }, $x);

        print_r($godineStaza);
        echo "<br>";

        function sortiranje($x){
            foreach($x as $osoba['godine_staza']){
                if($osoba['godine_staza'] > $osoba['godine_staza']){
                    return print_r($osoba['godine_staza']);
                }else{
                    return $osoba['godine_staza'];
                }
            }

        }

      
        sortiranje($x);
        
        usort($godineStaza, function($a, $b){
            if($a['godine_staza'] > $b['godine_staza']){
                return -1;
            }else{
                return 1;
            }
        });
        echo "Posle sortiranja : ";
        print_r($godineStaza);
        echo "<br>";
        echo "<br>";

        $maxGodineStaza = array_filter($godineStaza, function($osoba)
        {
            $max = 3;
            $novi_niz = [];
            for($i=0; $i<count($osoba); $i++)
            {   
                if($max == $osoba['godine_staza'])
                {
                    $novi_niz = $osoba['ime']."<br>";
                    $max--;
                    print_r($novi_niz);

                }
            }
           
        });
        
        



        /* $programeri = array_filter($x, function($osoba){
            if($osoba['pozicija'] === 'programer')
                return true;
            else 
                return false;
        });
        for($i=0; $i<count($programeri); $i++)
            prikazi_osobu($x[$i]); */
    ?>
</body>
</html>