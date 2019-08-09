<?php

require_once('Browser.php');

class Edge implements Browser {

    public function drawPage(String $title) {
        echo $title + ' page on Edge';
    }

    public function drawFavicon(String $title) {
        echo $title + ' favicon on Edge';
    }

}

?>