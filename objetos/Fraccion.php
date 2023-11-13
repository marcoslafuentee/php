<?php
class Racional{

    private int $numerador;
    private int $denominador;


    public function __constructor(int $numerador = 1,int $denominador = 1){


        if (is_string($numerador)){
            $numero = explode("/", $numerador);
            $numerador = $numero[0];
            $denominador = $numero[1];
        }
        $this->numerador = $numerador;
        $this->denominador = $denominador;

    }

    public function __toString()
    {
        return "$this->numerador/$this->denominador";
    }


}

?>