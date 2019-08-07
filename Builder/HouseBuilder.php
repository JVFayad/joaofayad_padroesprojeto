<?php

require_once('House.php');

abstract class HouseBuilder {

    protected $house;

    public function __construct () {
        $this->house = new House();
    }

    abstract public function buildArea ();

    abstract public function buildFloors ();

    public function getHouse () {
        return $this->house;
    }
}

?>