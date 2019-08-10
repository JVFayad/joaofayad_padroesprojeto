<?php

require_once('Person.php');

class Woman extends Person {
    
    protected $sons = [];

    public function __construct(String $name) {
        $this->name = $name;
    }

    public function printName() {
        echo $this->name;
        foreach($this->sons as $son) {
            $son->printName();
        }
    }

    public function createSon(Person $son) {
        $this->sons[] = $son;   
    }

    public function getSons() {
        return $this->sons;
    }

    public function getSon(String $name) {
        foreach ($this->sons as $son) {
            if ($son->getName() === $name) {
                return $son;
            }
        }
    }

}

?>