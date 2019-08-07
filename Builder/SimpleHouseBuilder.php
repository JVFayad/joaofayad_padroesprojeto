<?php

require_once('HouseBuilder.php');

class SimpleHouseBuilder extends HouseBuilder {
    
    public function buildArea () {
        $this->house->area = 100.0;
    }

    public function buildFloors () {
        $this->house->floors = 1;
    }
}

?>