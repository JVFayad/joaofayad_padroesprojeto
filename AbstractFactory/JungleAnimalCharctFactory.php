<?php

require_once('AnimalCharctFactory.php');
require_once('AsianContinent.php');
require_once('GreenColor.php');

class JungleAnimalCharctFactory extends AnimalCharctFactory {

    public function createContinent() {
        return new AsianContinent();
    }

    public function createColor() {
        return new GreenColor();
    }

}

?>