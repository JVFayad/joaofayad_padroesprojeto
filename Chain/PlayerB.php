<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerB extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerB);
    }

    protected function playIt() {
        echo 'Player B played it!';
    }

}

?>