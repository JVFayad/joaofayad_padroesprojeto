<?php

require_once('Animal.php');

class FactoryAnimal {
    protected $animal;

    public function createAnimal(String $type) {
    
    }

    public function returnAnimal() {
        return $this->animal;
    }
}

?>