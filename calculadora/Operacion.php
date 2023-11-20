<?php

class Operacion
{

    protected int $op1;
    protected int $op2;
    protected int $operador;

    const OPERACION_REAL = 1;
    const OPERACION_RACIONAL = 2;

    const ERROR = 0;

    static public function tipo_operacion(string $cadena){
        $retorno = self::ERROR;

        $numero = "#[0-9]+#";
        $numero_racional = "$numero\/[1-9][0-9]*";
        $numero_real = "$numero[.$numero]?";
        $operador_real = "\+|\-|\*|\/";

        return $retorno;
    }
}