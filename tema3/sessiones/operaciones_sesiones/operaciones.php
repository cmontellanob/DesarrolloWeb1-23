<?php
class operaciones{
    private $a;
    private $b;

    function __construct($a, $b)
    {
      $this->a=$a;
      $this->b=$b;  
    }
    public function sumar(){
        return $this->a + $this->b;
    }
    public function resta(){
        return $this->a - $this->b;
    }
    public function multiplicacion(){
        return $this->a * $this->b;
    }
    public function division(){
        return $this->a / $this->b;
    }

}