<?php
require_once "functionConstruct.php";

$mobilSatu = new Mobil("Avanza","Toyota");
$mobilSatu->tahun = 2019;

$mobilDua = new Mobil("Brio",null);
$mobilDua->tahun = 2020;

echo $mobilSatu->infoMobil2() . PHP_EOL;
echo $mobilDua->infoMobil2();


?>
