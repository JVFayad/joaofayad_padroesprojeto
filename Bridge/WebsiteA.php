<?php

require_once('Website.php');

class WebsiteA extends Website {

    public function __construct(Browser $browser) {
        parent($browser);
    }

    public function desenhar() {
        drawPage('Website A');
        drawFavicon('Website A');
    }

}

?>