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
        /* Nastaviti zadatak sa casa i :
        Napraviti klasu WebSite. Metode: 
        - header() sa naslovom "Dobro dosli u web-shop" - link ka index.php.
        - footer() sa naslovom "Bolje vas nasli" 
        - meni() koji prikazuje listu svih grupa. Svaki naziv grupe je link - index.php?grupa=…
        2. Prepraviti index.php i detaljnije.php da prikazuju i header, pa meni, pa proizvode, pa footer...
        3.* dopunski - neobavezno: napraviti meni tako sto se pokupe sve grupe iz niza podaci, i naprave svi linkovi. */
 
        include "podaci.php";
        class WebSite {
            function header () {
                echo "<div><h1><a href = 'index.php'>Dobro dosli u web-shop</a></h1></div>";
            }

            function footer () {
                echo "<div><h3>Bolje vas nasli</h3></div>";
            }

            function meni ($podaci) {
                $meni = [];
                foreach($podaci as $podatak){
                    if(!in_array($podatak['grupa'], $meni)){
                        $meni[] = $podatak['grupa'];
                    }
                }
                foreach($meni as $v){

                    echo "<a href = 'index.php?grupa=$v'> $v </a><br>";
                }
            }

        }

    $website = new WebSite ();
    //$website->header();
    //$website->footer();
    //$website->meni($podaci);
   ?>
</body>
</html>