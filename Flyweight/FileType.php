<?php

require_once('Point.php');

abstract class FileTyoe {
    abstract public function moveFile(Point $point);
} 

?>