<?php

require_once('Food.php');

class Burger extends Food {

    public function cook() {
        echo "\nBurger cooked!";
    }

}

?>