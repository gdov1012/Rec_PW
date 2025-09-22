<?php
require_once 'pessoa.php';

class funcionario extends pessoa {
    public int $rgm;
    public string $cargo;

    public function __construct($nome, $cpf, $dt_Nasc, $rgm, $cargo) {
        parent::__construct($nome, $cpf, $dt_Nasc);
        $this->rgm= $rgm;
        $this->cargo = $cargo;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / RGM: {$this->rgm} / Cargo: {$this->cargo}";
    }
}
?>