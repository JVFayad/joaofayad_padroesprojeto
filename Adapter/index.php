<?php

require_once('Adapter.php');
require_once('Pin2Plug.php');

$pin2plug = new Pin2Plug();
$adapter = new Adapter($pin2plug);
$adapter->connectPlug();
?>