<?php

require_once('Animal.php');
require_once('AnimalCharctFactory.php');
require_once('Continent.php');
require_once('Color.php');

class Fish implements Animal {

    private $characteristics;
    private $continent;
    private $color;

    public function __construct(AnimalCharctFactory $characteristics) {
        $this->characteristics = $characteristics;
    }

    public function born() {
        $color = $characteristics.createColor();
        $continent = $characteristics.createContinent();
    }

}

?>