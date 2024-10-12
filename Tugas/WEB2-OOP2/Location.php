<?php

//Parent Class
abstract class Location
{
    public string $name;
}

//Child Class
class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{
    
}

?>