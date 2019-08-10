<?php

require_once('Receita.php');

class ReceitaProxy extends Receita {
    protected $user, $password;

    private function havePermission() {
        return $this->user == 'admin' && $this->password == '1234';
    }

    public function pagarFisico(float $valorDoc, float $valorImpt, float $cpf) {
        if ($this->havePermission()) {
            return super::pagarFisico($valorDoc, $valorImpt, $cpf);
        }

        return null;
    }

    public function pagarJuridico(float $valorDoc, float $valorImpt, float $cnpj) {
        if ($this->havePermission()) {
            return super::pagarJuridico($valorDoc, $valorImpt, $cnpj);
        }

        return null;
    }
}

?>