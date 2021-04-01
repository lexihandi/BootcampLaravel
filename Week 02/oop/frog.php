<?php

class Frog extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
    }

    public function jump()
    {
        echo "Jump: Hop-Hop";
    }
}
