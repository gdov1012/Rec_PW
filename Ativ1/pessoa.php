<?php
class Pessoa {
    public string $nome;
    public string $cpf;
    public string $dt_Nasc;

    public function __construct($nome, $cpf, $dt_Nasc) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dt_Nasc = $dt_Nasc;
    }

    public function exibirInformacoes() {
        return "Nome: {$this->nome} / CPF: {$this->cpf} / Data de Nascimento: {$this->dt_Nasc}";
    }
}
?>