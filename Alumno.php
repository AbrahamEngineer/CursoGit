<?php

class Alumno{

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