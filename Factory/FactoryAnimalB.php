<?php

require_once('FactoryAnimal.php');
require_once('Dog.php');
require_once('Cat.php');
require_once('Fish.php');

class FactoryAnimalB extends FactoryAnimal {
    public function createAnimal(String $type) {

        if ($type == 'dog') {
            $this->animal = new Dog();
        } elseif ($type == 'cat') {
            $this->animal = new Cat();
        } else {
            $this->animal = new Fish();
        }
    
    }
}

?>