<?php
require_once 'pessoa.php';

class professor extends pessoa {
    public int $rf;
    public string $disciplina;

    public function __construct($nome, $cpf, $dt_Nasc, $rf, $disciplina) {
        parent::__construct($nome, $cpf, $dt_Nasc);
        $this->rf = $rf;
        $this->disciplina = $disciplina;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / RF: {$this->rf} / Disciplina: {$this->disciplina}";
    }
}
?>