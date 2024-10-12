<?php

class Product
{
    //Deklarasi Variabel
    protected string $name;
    protected int $price;
    //Deklarasi Construct
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;   
    }
}

?>