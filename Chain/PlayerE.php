<?php 

require_once('PlayerChain.php');
require_once('PlayerID.php');

class PlayerE extends PlayerChain {

    public function __construct(){
        parent(PlayerID::playerE);
    }

    protected function playIt() {
        echo 'Player E played it!';
    }

}

?>