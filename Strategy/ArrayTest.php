<?php

require_once('RollsArrayForwards.php');
require_once('RollsArrayBackwards.php');

class ArrayTest {
    protected $rollStrategy;
    protected $array;

    public function __construct(Array $array, String $order) {
        $this->array = $array;

        if ($order == 'asc') {
            $this->rollStrategy = new RollArrayForwards();
        } else {
            if ($order == 'desc') {
                $this->rollStrategy = new RollArrayBackwards();
            } else {
                throw new Exception('This order is not available!'); 
            }
        }

    }

    public function showArray() {
        $this->rollStrategy->rollsArray($this);
    }

}

?>