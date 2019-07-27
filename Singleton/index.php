<?php

require_once('Connection.php');

$connection = Connection::getConnection();
echo $connection->$status;

?>