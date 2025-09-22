<?php
class Pessoa {
    public string $nome;
    public string $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

    }

    public function exibirInformacoes() {
        return "nome: {$this->nome} / Idade: {$this->idade}";
    }
}
?>