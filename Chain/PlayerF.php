<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerF extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerF);
    }

    protected function playIt() {
        echo 'Player F played it!';
    }

}

?>