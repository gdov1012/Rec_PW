<?php
require_once 'pessoa.php';

class aluno extends pessoa {
    public int $ra;
    public string $curso;

    public function __construct($nome, $cpf, $dt_Nasc, $ra, $curso) {
        parent::__construct($nome, $cpf, $dt_Nasc);
        $this->ra = $ra;
        $this->curso = $curso;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / RA: {$this->ra} / Curso: {$this->curso}";
    }
}
?>