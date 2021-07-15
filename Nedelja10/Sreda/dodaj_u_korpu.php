<?php 


include "zad2.php";
include "baza_klasa.php";

if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj'){
    $id = $_GET('proizvod_id');
    $proizvod = $b->daj_proizvod($id);
    $k->dodaj_proizvod($id, $proizvod['naziv'], $proizvod['cena'], 1);
    
}
    
?>