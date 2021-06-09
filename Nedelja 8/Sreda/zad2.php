<?php
    include ("zad1.php");
?>

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
        /* 1. Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
        Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice */
        echo "<br>";
        class Baldahin extends Krevet{
            public $visina;
            public $cena_Baldahina;

            function __construct($duzina, $sirina, $materijal, $cena, $popust, $visina, $cena_Baldahina)
            {
                parent::__construct($duzina, $sirina, $materijal, $cena, $popust,$visina, $cena_Baldahina);
                $this->cena = $cena;
                $this->visina = $visina;
                $this->cena_Baldahina = $cena_Baldahina;
            }

            private function set_cena_Baldahina (){
                $cena = $this->cena_Baldahina;
               
            }

            public function get_cena_Baldahina () {
                echo $this->cena_Baldahina;
                $this->set_cena_Baldahina();
            }
            
            function zbir (){ 
                $zbir = $this->cena + $this->cena_Baldahina;
                return $zbir;
            }
            function __toString()
            {
                return "Cena samog kreveta je ".$this->cena." RSD, a cena Baldahina je ".$this->cena_Baldahina." RSD, odnosno ".$this->zbir()." RSD";
            }
        }
        /* 2. Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
        (Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu") */

        $krevet4 = new Baldahin (200, 200, "memorijska pena", 60000, 10, 2, 20000);

        echo $krevet4;
      

    ?>
</body>
</html>