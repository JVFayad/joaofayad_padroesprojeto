<?php 

require_once('Server.php');
require_once('Point.php');

$server = new Server();
$server->getFlyWeight(Server::FORMATS['FILE2'])->moveFile(new Point(12, 13));

?>