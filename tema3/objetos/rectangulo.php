<?php
class Rectangulo implements IFigura{
    private $base;
    private $altura;
    
    function __construct($base,$altura)
    {
        $this->base=$base;
        $this->altura=$altura;
        
    }

    function calcularArea(){
        return $this->base*$this->altura;
    }
}