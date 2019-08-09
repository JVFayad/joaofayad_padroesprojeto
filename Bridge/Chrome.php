<?php

require_once('Browser.php');

class Chrome implements Browser {

    public function drawPage(String $title) {
        echo $title + ' page on Chrome';
    }

    public function drawFavicon(String $title) {
        echo $title + ' favicon on Chrome';
    }

}

?>