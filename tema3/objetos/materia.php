<?php 
 abstract class Materia {
    protected $nombre;
    protected $sigla;
    protected $creditos;
    protected $nota;
    function __construct($nombre,$sigla,$creditos,$nota)
    {
        $this->nombre=$nombre;
        $this->sigla=$sigla;
        $this->creditos=$creditos;
        $this->nota=$nota;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public abstract function asignarDocente();
    public abstract function asignarHorario();


 }
 class sis256 extends Materia{
    function __construct($nombre,$sigla,$creditos,$nota)
    {
        parent::__construct($nombre,$sigla,$creditos,$nota);
    }
    public function asignarDocente()
    {
        return "Ing. Carlos";
    }
    public function asignarHorario()
    {
        return "Lunes 8:00-10:00";
    }
 }
