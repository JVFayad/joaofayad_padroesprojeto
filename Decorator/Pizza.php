<?php

require_once('Food.php');

class Pizza extends Food {

    public function cook() {
        echo "\nPizza cooked!";
    }

}

?>