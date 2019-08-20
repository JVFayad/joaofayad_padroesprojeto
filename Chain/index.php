<?php

require_once('PlayerA');
require_once('PlayerB');
require_once('PlayerC');
require_once('PlayerD');
require_once('PlayerE');
require_once('PlayerF');
require_once('PlayerID');

$player = new PlayerA();
$player->setNextPlayer(new PlayerB());
$player->setNextPlayer(new PlayerD());
$player->setNextPlayer(new PlayerF());

try {
    $player->roundPlayed(PlayerID::playerD);
    $player->roundPlayed(PlayerID::playerF);
    $player->roundPlayed(PlayerID::playerA);
    $player->roundPlayed(PlayerID::playerB);
    $player->roundPlayed(PlayerID::playerC);
    $player->roundPlayed(PlayerID::playerD);
} catch (Excetion $e) {
    echo $e;
}

?>