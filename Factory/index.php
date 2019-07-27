<?php

require_once('FactoryAnimalB.php');

$factoryb = new FactoryAnimalB();
$factoryb->createAnimal('dog');

$animal = $factoryb->returnAnimal();

echo $animal->alive;

?>