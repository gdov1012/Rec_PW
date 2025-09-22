<?php
class animal {
    public string $nome;
    public string $especie;
    public int $idade;

    public function __construct($nome, $especie, $idade) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;

    }

    public function exibirInformacoes() {
        return "Nome: {$this->nome} / Especie: {$this->especie} / Idade: {$this->idade}";
    }

    public function conversao_leao() { 
        $idade_convertida = $this->idade * 4;
        return "A idade {$this->idade} convertida para humanos é {$idade_convertida}";
    }

    public function conversao_elefante() { 
        $idade_convertida = $this->idade * 3;
        return "A idade {$this->idade} convertida para humanos é {$idade_convertida}";
    }

}
?>