<?php

class Gorjeta{
    public float $valor;
    public string $qualidade;
    protected float $gorjeta;
    protected float $valorTotal;


    function __construct($valor,$qualidade)
    {
        $this->valor = $valor;
        $this->qualidade = $qualidade;
        $this->calcularGorjeta();
    }

    public function calcularGorjeta(){
        $this->gorjeta = $this->valor*($this->qualidade/100);
        $this->valorTotal = $this->valor + $this->gorjeta;
    }

    public function getValor(){
        return $this->valor;
    }
    
    public function getQualidade(){
        return $this->qualidade;
    }
    public function getGorjeta(){
        return $this->gorjeta;
    }
    public function getValorTotal(){
        return $this->valorTotal;
    }

}
