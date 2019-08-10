<?php

require_once('Ingredient.php');

class CreamChesse extends Ingredient {

    public function __construct(Food $foodtype){
        parent($foodType);
    }

    public function addCream() {
        echo "Cream Cheese added!";
    }

    public function cook() {
        $this->addCream();
        $this->foodType->cook();
    }

}

?>