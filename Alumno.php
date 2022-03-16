<?php

class Alumno{

    private $codigo;
    private $nombre;
    private $edad;

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        return $this->codigo = $codigo;
    }

    public function getNombre(){
        return $this->nombre;
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

}

?>