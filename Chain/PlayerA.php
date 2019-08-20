<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerA extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerA);
    }

    protected function playIt() {
        echo 'Player A played it!';
    }

}

?>