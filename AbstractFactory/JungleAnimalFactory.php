<?php

require_once('AnimalFactory.php');
require_once('Parrot.php');
require_once('Fish.php');

class FarmAnimalFactory extends AnimalFactory {

    public function createAnimal(String $type, String $specie) {
        if ($specie == 'Parrot') {
            $this->animal = new Parrot( getCharct($type) );
        } 
        else if ($specie == 'Fish') {
            $this->animal = new Fish( getCharct($type) );
        }
    }

}

?>