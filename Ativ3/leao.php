<?php
require_once 'animal.php';
 
class leao extends animal {
    public int $tamanho_Juba;

    public function __construct($nome, $especie, $idade, $tamanho_Juba) {
        parent::__construct($nome, $especie, $idade);
        $this->tamanho_Juba = $tamanho_Juba;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / Tamanho da juba: {$this->tamanho_Juba}cm";
    }

    public function rugir() {
        return "O {$this->especie} esta rugindo!";
    }
}
?>