<?php
require_once 'animal.php';
 
class elefante extends animal {
    public float $comprimento_Tromba;

    public function __construct($nome, $especie, $idade, $comprimento_Tromba) {
        parent::__construct($nome, $especie, $idade);
        $this->comprimento_Tromba = $comprimento_Tromba;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / Tamanho da tromba: {$this->comprimento_Tromba}metros";
    }

    public function trombetar() {
        return "O {$this->especie} esta trombetando!";
    }
}
?>