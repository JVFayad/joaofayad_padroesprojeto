<?php

require_once('Browser.php');

class Firefox implements Browser {

    public function drawPage(String $title) {
        echo $title + ' page on Firefox';
    }

    public function drawFavicon(String $title) {
        echo $title + ' favicon on Firefox';
    }

}

?>