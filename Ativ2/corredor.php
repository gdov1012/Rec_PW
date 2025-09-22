<?php
require_once 'pessoa.php';
 
class corredor extends pessoa {
    public int $distancia_Corrido;

    public function __construct($nome, $idade, $distancia_Corrido) {
        parent::__construct($nome, $idade);
        $this->distancia_Corrido = $distancia_Corrido;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / Distancia percorrida: {$this->distancia_Corrido}";
    }

    public function correr() {
        return " {$this->nome} esta correndo e alcançou  {$this->distancia_Corrido}km de distancia";
    }
}
?>