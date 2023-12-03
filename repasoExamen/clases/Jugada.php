<?php

namespace jugadas;

class Jugada
{

    private int $numero;
    private int $hora;
    private int $resultado;

    public function __construct(int $num){
        $this->numero = $num;
        $this->hora = time();
        $this->evaluar_jugada($num);
    }

    private function evaluar_jugada($numero){
        $this->resultado = $numero <=> Clave::obtener_clave();
    }


    public function __toString(){
        $msj_resultado = match ($this->resultado) {
            1 => "Mayor",
            -1 => "Menor",
            0 => "Acertado"
        };
        $hora = date("H:i:s");
        return <<<FIN
                Numero en la jugada <span class='resaltado'>$this->numero</span>
                Instante <span class='resaltado'>$hora</span>
                Con resultado <span class='resaltado'>$msj_resultado</span>

           FIN;
    }

    public function get_resultado(){
        return $this->resultado;
    }
}