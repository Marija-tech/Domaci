<?php

use Baza as GlobalBaza;

class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            else
                echo 'Konektovan!';
        }

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }

        function izvrsi_($upit){
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: ' . $this->conn->error);
            } else {
                echo "Uspesno izvrsen upit!";
            }
        }

        function vrati_id ($drzava, $grad) {
            $r = $this->izvrsi_select("SELECT id FROM `destinacije` WHERE drzava='$drzava' AND grad='$grad'");

            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function vrati_destinaciju ($id) {
            $r = $this->izvrsi_select("SELECT drzava, grad FROM `putovanja` JOIN `destinacije` WHERE destinacije.id = $id AND destinacija_id = $id");

            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function brisi_putovanje ($id) {
            $this->izvrsi_upit("SELECT * FROM `putnici_putovanja` WHERE id_putovanja = $id");
        }


    }

    $ta = new Baza ('turisticka_agencija1');
    echo "<br>";
    print_r($ta->vrati_id('Spanija', 'Madrid'));
    print_r($ta->vrati_destinaciju(4));

    
    
    
?>