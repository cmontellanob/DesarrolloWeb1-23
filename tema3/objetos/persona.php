<?php
class Persona {
    protected $nombres;
    protected $apellidos;
    protected $sexo;
    function __construct($nombres,$apellidos,$sexo)
    {
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->sexo=$sexo;
        
    }
    public function getNpombreCompleto()
    {
        return $this->nombres." ".$this->apellidos;
    }

}

class Estudiante extends Persona{
    private $codigo;
    private $carrera;
    function __construct($nombres,$apellidos,$sexo,$codigo,$carrera)
    {
        parent::__construct($nombres,$apellidos,$sexo);
        $this->codigo=$codigo;
        $this->carrera=$carrera;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getCarrera()
    {
        return $this->carrera;
    }
    public function getNpombreCompleto()
    {
        return parent::getNpombreCompleto()." ".$this->codigo;
    }
}
