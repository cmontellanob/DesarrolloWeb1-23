<?php
class Cuadrado implements IFigura
{
    public $lado ;
    function __construct($lado)
    {
        $this->lado=$lado;
    }

    function calcularArea(){

        return $this->lado*$this->lado;

    }
}