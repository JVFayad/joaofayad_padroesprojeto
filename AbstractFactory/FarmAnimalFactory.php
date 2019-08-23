<?php

require_once('AnimalFactory.php');
require_once('Dog.php');
require_once('Cat.php');
require_once('Fish.php');

class FarmAnimalFactory extends AnimalFactory {

    public function createAnimal(String $type, String $specie) {
        if ($specie == 'Dog') {
            $this->animal = new Dog( getCharct($type) );
        } 
        else if ($specie == 'Cat') {
            $this->animal = new Cat( getCharct($type) );
        }
        else if ($specie == 'Fish') {
            $this->animal = new Fish( getCharct($type) );
        }
    }

}

?>