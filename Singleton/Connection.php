<?php

class Connection {
    private static $instance;

    private function __construct() {
        $this->$status = "Connected";
        //
    }

    public static function getConnection() {
        if (!isset(self::$instance)) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }
}

?>