<?php

abstract class PlayerChain {
    protected $next;
    protected $playerId;

    public function __construct(PlayerID $id) {
        $this->next = null;
        $this->playerId = $id;
    }

    public function setNextPlayer(PlayerChain $next) {
        if ($next == null) {
            $this->next = $next;
        } else {
            $this->next->setNextPlayer($next);
        }
    }

    public function roundPlayed(PlayerID $id) {
        if ($this->canPlay($id)) {
            $this->playIt();
        } else {
            if ($this->next == null) {
                throw new Exception('Player ' + $id + ' can´t play!');
            }
            $this->next->roundPlayed($id);
        }
    }

    public function canPlay(PlayerID $id) {
        if ($this->playerId == $id) {
            return true;
        }

        return false;
    }

    abstract protected function playIt();
}

?>