<?php

require_once("Pin2Plug.php");
require_once("Pin3Plug.php");

class Adapter extends Pin3Plug {
    
    private $pin2plug;

    public function __construct(Pin2Plug $pin2plug) {
        $this->pin2plug = $pin2plug;
    }

    public function connectPlug() {
        $this->pin2plug->connectPlug();
    }

}

?>