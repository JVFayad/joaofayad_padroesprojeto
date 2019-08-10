<?php

require_once('Man.php');
require_once('Woman.php');

$father = new Man();
$mother = new Woman();
$son = new Man();
$daughter = new Woman();

try {
    $father->createSon($son);
} catch (Exception $e) {
    echo $e;
}

try {
    $mother->createSon($son);
} catch (Exception $e) {
    echo $e;
}

try {
    $mother->createSon($daughter);
} catch (Exception $e) {
    echo $e;
}

?>