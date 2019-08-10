<?php

require_once('Ingredient.php');

class Bacon extends Ingredient {

    public function __construct(Food $foodtype){
        parent($foodType);
    }

    public function addBacon() {
        echo "Bacon added!";
    }

    public function cook() {
        $this->addBacon();
        $this->foodType->cook();
    }

}

?>