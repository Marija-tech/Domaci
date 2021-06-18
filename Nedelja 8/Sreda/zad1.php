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
        /* 1. Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
        Napisati konstruktor koji dobija i  postavlja sve clanice.
        Napisati metodu za citanje cene.
        Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...." */

        class Krevet {
            public $duzina;
            public $sirina;
            public $materijal;
            private $cena;

            public function __construct($duzina, $sirina, $materijal, $cena)
            {
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
                $this->cena = $cena;
            }

            public function get_cena () {
                return $this->cena;
                
            }
            
            public function popust ($p){
                $popust = ($this->cena * $p) / 100;
                $cena_posle_popusta = $this->cena - $popust;
                return $cena_posle_popusta;
            }

            public function __toString()
            {
                return "Proizvod duzine ".$this->duzina." i sirine ".$this->sirina." , napravljen od ".$this->materijal." po ceni od ".$this->cena. " RSD.";
            
            }

            

        }

        /* 2. Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom. */

        
        $krevet1 = new Krevet(200, 80, "memorijska pena", 38000);
        $krevet2 = new Krevet(200, 180, "memorijska pena", 60000);

        if($krevet1->get_cena() > $krevet2->get_cena()){
            echo $krevet1;
        }else{
            echo $krevet2;
        }
        echo "<br>";
        

        /* 3. U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
        Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet. */
        
        $krevet3 = new Krevet(200, 160, "memorijska pena", 45000);
        echo $krevet3."<br>";
        echo $krevet3.", a cena sa popustom je ".$krevet3->popust(10)." RSD.";
        
        
        
        
    ?>        
</body>
</html>