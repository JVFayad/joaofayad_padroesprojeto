<?php

require_once('Ingredient.php');

class Cheese extends Ingredient {

    public function __construct(Food $foodtype){
        parent($foodType);
    }

    public function addCheese() {
        echo "Chesse added!";
    }

    public function cook() {
        $this->addCheese();
        $this->foodType->cook();
    }

}

?>