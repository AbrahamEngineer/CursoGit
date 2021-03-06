<?php

class Alumno{

    private $codigo;
    private $nombre;
    private $edad;
    private $dni;

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        return $this->codigo = $codigo;
    }

    public function getNombre(){
        return "Mi nombre es " . $this->nombre;
    }

    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    
    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        return $this->edad = $edad;
    }

    public function getDni(){
        return $this->dni;
    }

    public function setDni($dni){
        return $this->dni = $dni;
    }
  
    public function operacionesAritmeticas($numero1, $numero2, $operador){
        switch($operador){
            case 'suma': return $numero1 + $numero2;
            case 'resta': return $numero1 - $numero2;
            case 'multi': return $numero1 * $numero2;
            case 'div': return $numero1 / $numero2;
        }
    }

}

?>