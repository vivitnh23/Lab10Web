<?php
class Mobil 
{ 
    private $warna; 
    private $merk; 
    private $harga; 

    public function __construct() 
    { 
        $this->warna = "Abu-abu"; 
        $this->merk = "BMW"; 
        $this->harga = "10000000"; 
    } 

    public function gantiWarna ($warnaBaru) 
    { 
        $this->warna = $warnaBaru; 
    } 

    public function tampilWarna () 
    { 
        echo "Warna mobilnya : " . $this->warna . "<br>";
    } 
} 

echo "<link rel='stylesheet' href='style.css'>";
echo "<div class='card'>";

$a = new Mobil(); 
$b = new Mobil(); 

echo "<h3>Mobil pertama</h3>";
$a->tampilWarna();
echo "Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

echo "<hr>";

echo "<h3>Mobil kedua</h3>";
$b->gantiWarna("Hijau");
$b->tampilWarna();

echo "</div>";
?>
