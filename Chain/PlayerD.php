<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerD extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerD);
    }

    protected function playIt() {
        echo 'Player D played it!';
    }

}

?>