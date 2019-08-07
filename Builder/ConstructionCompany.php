<?php

class ConstructionCompany {

    protected $houseBuilder;

    public function __construct ($houseBuilder) {
        $this->houseBuilder = $houseBuilder;
    }

    public function buildHouse() {
        $houseBuilder = $this->houseBuilder;

        $houseBuilder->buildArea();
        $houseBuilder->buildFloors();
    } 

    public function getHouse () {
        return $this->houseBuilder->getHouse();
    }
}

?>