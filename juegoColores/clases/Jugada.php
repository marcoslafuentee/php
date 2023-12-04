<?php

namespace clases;

class Jugada
{
    private int $color1;
    private int $color2;
    private int $color3;
    private int $color4;

    private int $hora;
    private int $posiciones;
    private int $colores;


    public function __construct(int $color1, int $color2, int $color3, int $color4)
    {
        $this->color1=$color1;
        $this->color2=$color2;
        $this->color3=$color3;
        $this->color4=$color4;

        $arrayNumerosColores = [$color1, $color2, $color3, $color4];

        $this->hora = time();

        $this->evaluar_jugada($arrayNumerosColores);
        $this->evaluar_jugada($arrayNumerosColores);

    }


    private function evaluar_jugada($arrayNumerosColores){
        //$this->resultado = $numero <=> Clave::obtener_clave();
        $coloresAcertados = 0;
        $posicionesAcertadas = 0;
        $resultado = $_SESSION['clave'];
        $listaColores = $_SESSION['listaColores'];

        $i =0;
        while ($i<4){
            if ($arrayNumerosColores[$i] == array_search($resultado)){
                $coloresAcertados++;
                if (array_search($resultado[$i]) == $arrayNumerosColores[$i]){
                    $posicionesAcertadas++;
                }
            }
        }

        $this->posiciones = $posicionesAcertadas;
        $this->colores = $coloresAcertados;



    }
    //Falta método para mostrar resultados
    //Funcion para coger resultados

}