<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerC extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerC);
    }

    protected function playIt() {
        echo 'Player C played it!';
    }

}

?>