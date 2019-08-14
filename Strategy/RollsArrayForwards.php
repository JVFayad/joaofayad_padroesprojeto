<?php

require_once('RollsArray.php');

class RollsArrayForwards implements RollsArray {
    
    public function rollsArray(ArrayTest $testArray) {
        $str_array = '';
        $array = $testArray->array;

        foreach ($array as $elem) {
            $str_array = $str_array + strval($elem) + ' ';
        }

        echo $str_array;
    }

}

?>