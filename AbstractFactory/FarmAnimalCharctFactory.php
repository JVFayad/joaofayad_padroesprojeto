<?php

require_once('AnimalCharctFactory.php');
require_once('AmericanContinent.php');
require_once('BrownColor.php');

class FarmAnimalCharctFactory extends AnimalCharctFactory {

    public function createContinent() {
        return new AmericanContinent();
    }

    public function createColor() {
        return new BrownColor();
    }

}

?>