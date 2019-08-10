<?php

abstract class Person {

    protected $name;

    public function getName() {
        return $this->name;
    }

    public function printName() {
        echo $this->name;
    }

    public function createSon(Person $son) {
        throw new Exception($this->name + ' não pode ter filhos pois não é mãe!');   
    }

    public function getSon() {
        throw new Exception($this->name + ' não pode ter filho pois não é mãe!');
    }

    public function getSons() {
        throw new Exception($this->name + ' não pode ter filhos pois não é mãe!');
    }
}

?>