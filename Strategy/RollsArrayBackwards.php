<?php

require_once('RollsArray.php');

class RollsArrayBackwards implements RollsArray {
    
    public function rollsArray(Array $testArray) {
        $str_array = '';
        $array = $testArray->array;
        
        foreach (array_reverse($array) as $elem) {
            $str_array = $str_array + strval($elem) + ' ';
        }

        echo $str_array;
    }

}

?>