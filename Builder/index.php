<?php

$constructCompany = new ConstructionCompany(new SimpleHouseBuilder());
$constructCompany->buildHouse();

$house = $constructCompany->getHouse();

echo $house->information();

?>