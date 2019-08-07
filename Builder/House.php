<?php

class House {
    protected $area;
    protected $floors;

    public function information() {
        return "Casa - Area: " + $this->area + "/ Andares: " + $this->floors;
    } 
}

?>