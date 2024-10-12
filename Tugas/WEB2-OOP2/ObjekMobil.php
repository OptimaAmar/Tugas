<?php

require_once "Mobil.php";
require_once "MobilSport.php";

//Objek dari class Mobil
$avanza = new Mobil("Avanza", "Toyota", 2020);
echo $avanza->infoMobil();

//Objek dari class MobilSport
$supra = new MobilSport("Supra", "Toyota", 2021);
echo $supra->infoMobil();
echo $supra->jalankanTurbo();

?>