<?php

require_once('Bacon.php');
require_once('Burger.php');
require_once('Cheese.php');
require_once('Pizza.php');

$food1 = new Bacon(new Burger());
$food2 = new Cheese(new Pizza());

$food1->cook();
$food2->cook();

?>