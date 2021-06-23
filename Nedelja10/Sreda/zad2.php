<?php
    session_start();

    if(!isset($_SESSION['stavke_korpe'])){
        $_SESSION['stavke_korpe']= [];
    }

    class Korpa {

        public $stavke_korpe;

        function __construct()
        {
            $this->stavke_korpe = $_SESSION['stavke_korpe']; 
            
        }

        function prikazi () {
            echo "<table border='1'>";
            for($i=0; $i<count($this->stavke_korpe); $i++){
            echo "<tr>";
                echo "<td>". $this->stavke_korpe[$i]['naziv'] ."</td>";
                echo "<td>". $this->stavke_korpe[$i]['cena'] ."</td>";
                echo "<td>". $this->stavke_korpe[$i]['kolicina'] ."</td>";
            echo "</tr>";
            echo "</table>";
            }
        }

        function dodaj_proizvod ($proizvod_id, $naziv, $cena, $kolicina){
            $n = false;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $proizvod_id){
                    $this->promeni_kolicinu($i, $kolicina);
                    $n = true;
                    break;
                }
                if(!$n == false){
                    $novi_proizvod = ['id'=>$proizvod_id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina];
                    array_push($this->stavke_korpe, $novi_proizvod);
                }
                $_SESSION['stavke_korpe'] = $this->stavke_korpe;
            }
        }

        function obrisi_proizvod ($id) {
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] = $id){
                   array_splice($this->stavke_korpe, $i, 1); 
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

        function promeni_kolicinu ($id, $kolicina) {
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    $this->stavke_korpe[$i]['kolicina'] += $kolicina;
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }   

    }

    $k = new Korpa ();
    $k->dodaj_proizvod(12, 'pegla', 4000, 3);
    $k->prikazi();

?>