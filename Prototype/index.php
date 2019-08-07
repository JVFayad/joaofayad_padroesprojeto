<?php

require_once('Document.php');
require_once('DocumentPage.php');

$documentPageProto = new DocumentPage();

$documentPage = $documentPageProto->clone();
$documentPage2 = $documentPageProto->clone();

?>

