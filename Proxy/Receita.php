<?php

class Receita {

    public function pagarFisico(float $valorDoc, float $valorImpt, float $cpf) {
        echo "Imposto (físico) pago no valor de: " + $valorDoc;
    }

    public function pagarJuridico(float $valorDoc, float $valorImpt, float $cpf) {
        echo "Imposto (jurídico) pago no valor de: " + $valorDoc;
    }

}

?>