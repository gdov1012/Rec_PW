<?php
require_once 'pessoa.php';
 
class nadador extends pessoa {
    public int $voltas_Piscina;

    public function __construct($nome, $idade, $voltas_Piscina) {
        parent::__construct($nome, $idade);
        $this->voltas_Piscina = $voltas_Piscina;
    }

    public function exibirInformacoes() {
        $base = parent::exibirInformacoes();
        return $base . " / Numero de voltas na Pscina: {$this->voltas_Piscina}";
    }

    public function nadar() {
        return " {$this->nome} esta nadando e deu {$this->voltas_Piscina} voltas na Piscina";
    }
}
?>