<?php

require_once('Person.php');

class Man extends Person {
    
    public function __construct(String $name) {
        $this->name = $name;
    }

}

?>