<?php

require_once('Food.php');

class Ingredient extends Food {

    protected $foodType;

    public function __construct(Food $foodType) {
        $this->foodType = $foodType;
    }

}

?>