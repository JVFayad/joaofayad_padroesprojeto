<?php

require_once('HouseBuilder.php');

class ElevatedHouseBuilder extends HouseBuilder {
    
    public function buildArea () {
        $this->house->area = 200.0;
    }

    public function buildFloors () {
        $this->house->floors = 2;
    }
}

?>