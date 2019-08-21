<?php

class File {

    protected $name;

    public function __construct(String $fileName) {
        $this->name = $fileName;
    }

    public function moveFile() {
        echo $this->name + " was moved ";
    }

}

?>