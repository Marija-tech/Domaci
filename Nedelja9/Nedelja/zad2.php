<?php
    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            if ($this->conn->connect_error){
                die('Greska: '. $this->conn->connect_error);
            }else{
                echo "KONEKTOVAN";
            }

        }

        function izvrsi_select ($upit) {
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }
        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: ' . $this->conn->error);
            }else{
                echo "Upit je uspesno izvrsen";
            }
                
        }
        function prikazi_destinacije (){
            $r = $this->izvrsi_select("SELECT grad,drzava,datum_polaska, datum_povratka FROM destinacije JOIN putovanja ON destinacije.id = putovanja.id");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function prikazi_putnike (){
            $r = $this->izvrsi_select("SELECT * FROM putnici");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function otkazi_rezervaciju ($broj_pasosa) {
            $r = $this->izvrsi_upit("DELETE FROM putnici_putovanja WHERE broj_pasosa = ".$broj_pasosa);
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
    }
    $b = new Baza('turisticka_agencija1');

    //provera
    print_r($b->prikazi_destinacije());
    echo "<br>";
    print_r($b->prikazi_putnike());
    echo "<br>";
    print_r($b->otkazi_rezervaciju(123));


?>