<?php

require_once('Website.php');

class WebsiteB extends Website {

    public function __construct(Browser $browser) {
        parent($browser);
    }

    public function desenhar() {
        drawPage('Website B');
        drawFavicon('Website B');
    }

}

?>