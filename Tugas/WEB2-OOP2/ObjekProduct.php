<?php

require_once "Product.php";
require_once "ProdukTurunan.php";
//Membuat Objek Produk
$product = new Product("Apple", 20000);

//Menampilkan Info Nama dan Harga
echo $product->getName(). PHP_EOL;
echo $product->getPrice(). PHP_EOL;

$product2 = new ProdukTurunan("Nanas", 30000);
$product2->info();
?>
