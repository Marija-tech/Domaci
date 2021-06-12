<?php 
/*    Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu. */

class SastojakHrane {
    public $naziv, $mera, $kalorije;

    function __construct($naziv, $mera, $kalorije)
    {
        $this->naziv = $naziv;
        $this->mera = $mera;
        $this->kalorije = $kalorije;
    }

    function promeniMeru($nova_mera) {
        $this->mera = $nova_mera;
        
    }

    function prikazi () {
        return "<p>Proizvod ".$this->naziv." ima meru ".$this->mera." i ".$this->kalorije." kalorija.</p>";
    }
}
$obj = new SastojakHrane("palacinke", 200, 500);
echo $obj->prikazi()."<br>";
$obj->promeniMeru(350);
echo $obj->prikazi()."<br>";


/* Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

Proveriti kod sledecim naredbama: */
$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
];

class Jelo {
    public $naslov, $opis, $podaci;

    function __construct($naslov, $opis, $podaci)
    {
        $this->naslov = $naslov;
        $this->opis = $opis;
        $sastojci = [];
        foreach($podaci as $podatak){
            $sastojci[] = new SastojakHrane($podatak["naziv"], $podatak["mera"], $podatak["kalorije"]);
        }
        $this->podaci = $sastojci;
    }

   function prikazi () {
    return "<p>Jelo ".$this->naslov." ima opis".$this->opis." i sastojke".print_r($this->podaci)."</p>";

   }

   function promeniMeru($naziv_sastojka, $nova_mera) {
        foreach($this->podaci as $sastojak){
            if($sastojak->naziv == $naziv_sastojka){
                $sastojak->mera = $nova_mera;
                break;
            }
        }
    }

   

}
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
echo $jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
echo $jelo->prikazi();