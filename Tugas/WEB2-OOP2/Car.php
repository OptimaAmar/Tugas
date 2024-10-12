<?php
interface HasBrand
{
    function getBrand(): string;
}
interface isMaintenance
{
    function isMaintenance(): bool;
}
interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

//Implementasi interface pada class childnya
class Avanza implements Car
{
    public function drive(): void
    {
        echo"Drive Avanza". PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }
    public function getBrand(): string
    {
        return "Toyota";
    }
    public function isMaintenance(): bool
    {
        return false;
    }
}

?>