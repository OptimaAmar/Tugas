<?php
require_once "Category.php";

$objCategory = new Category();
//Untuk instan variabel tidak lagi menggunakan seperti ini
//$objCategory->name="Handphone";
$objCategory->setName("Handphone");
$objCategory->setExpensive("true");

//Mengakses Data
echo "Name : {$objCategory->getName()}". PHP_EOL;
echo "Expensive : {$objCategory->isExpensive()}". PHP_EOL;


?>