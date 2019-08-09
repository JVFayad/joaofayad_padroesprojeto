<?php

require_once('Browser');

abstract class Website {

    protected $browser;

    public function __construct(Browser $browser) {
        $this->browser = $browser;
    }

    public function drawPage() {
        $this->browse->drawPage();
    }

    public function drawFavicon() {
        $this->browse->drawFavicon();
    }

    abstract function draw();

}

?>