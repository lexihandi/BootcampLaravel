<?php
class Ape extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 2;
        $this->cold_blooded = "no";
    }

    public function yell()
    {
        echo "Yell: Auooo";
    }
}
