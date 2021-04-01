<?php

require "Animal.php";
require "Frog.php";
require "Ape.php";

$sheep = new Animal("shaun");
echo $sheep->getName();
echo "<br>";
echo $sheep->getLegs();
echo "<br>";
echo $sheep->getColdBlooded();
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->getName();
echo "<br>";
echo $kodok->getLegs();
echo "<br>";
echo $kodok->getColdBlooded();
echo "<br>";
$kodok->jump();
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->getName();
echo "<br>";
echo $sungokong->getLegs();
echo "<br>";
echo $sungokong->getColdBlooded();
echo "<br>";
$sungokong->yell();
echo "<br>";
echo "<br>";
