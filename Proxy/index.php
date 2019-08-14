<?php

require_once('ReceitaProxy.php');

echo "Usuario Comum vai pagar\n";

$receitaSession1 = new ReceitaProxy('usuario', '4321');
$receitaSession1->pagarFisico();
$receitaSession1->pagarJuridico();

echo "\nAdmin vai pagar\n";

$receitaSession2 = new ReceitaProxy('admin', '1234');
$receitaSession2->pagarFisico();
$receitaSession2->pagarJuridico();

?>