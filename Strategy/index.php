<?php

require_once('ArrayTest.php');

$array = [1, 2, 3, 4, 5, 6];

$arrayTest = new ArrayTest($array, 'asc');
$arrayTest.showArray();

$arrayTest = new ArrayTest($array, 'desc');
$arrayTest.showArray();

?>