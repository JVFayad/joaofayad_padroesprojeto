<?php

class Server {

    protected $files = Array();

    const FORMATS = [
        'FILE1' => 1,
        'FILE2' => 2
    ];

    public function __construct() {
        $files[] = new FileFormat('player.png');
        $files[] = new FileFormat('enemy.png');
    }

    public function getFlyWeight($format) {
        if ($format == FORMATS['FILE1']) {
            return $files[0];
        } else if ($format == FORMATS['FILE2']) {
            return $files[1];
        }

        return null;
    }

}

?>