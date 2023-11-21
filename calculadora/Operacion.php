<?php

abstract class Operacion
{

    protected int $op1;
    protected int $op2;
    protected int $operador;

    const OPERACION_REAL = 1;
    const OPERACION_RACIONAL = 2;

    const ERROR = 0;

    static public function tipo_operacion(string $cadena){

        $numeroEntero = "[0-9]*";
        $numeroRacional = "$numeroEntero\/[1-9][0-9]*";
        $numeroReal = "$numeroEntero(\.[0-9]+)?";
        $operadorReal = "[\+-\*\/]";
        $operadorRacional = "[\+\-\*\:]";

        $operacionReal = "^$numeroReal$operadorReal$numeroReal$";
        $operacionRacional = "^$numeroRacional$operadorRacional$numeroRacional$";
        $operacionRacional1 = "^$numeroEntero$operadorRacional$numeroRacional$";
        $operacionRacional2 = "^$numeroRacional$operadorRacional$numeroEntero$";


        $retorno = match (1){
            preg_match("#$operacionReal#", $cadena)=> self::OPERACION_REAL,
            preg_match("#$operacionRacional#", $cadena)=> self::OPERACION_RACIONAL,
            preg_match("#$operacionRacional1#", $cadena)=> self::OPERACION_RACIONAL,
            preg_match("#$operacionRacional2#", $cadena)=> self::OPERACION_RACIONAL,
            default=> self::ERROR
        };

        return $retorno;
    }

    public function __construct(string $cadena)
    {
        $this->operador=$this->buscar_operador($cadena);
        $numero = explode($this->operador, $cadena);
        $this->op1=$numero[0];
        $this->op2=$numero[1];
    }


    private function buscar_operador($cadena){
        if (str_contains($cadena, '+'))
            return '+';
        if (str_contains($cadena, '-'))
            return '-';
        if (str_contains($cadena, '*'))
            return '*';
        if (str_contains($cadena, ':'))
            return ':';
        if (str_contains($cadena, '/'))
            return '/';

    }

    public function __toString(): string
    {
        return "$this->op1 $this->operador $this->op2";
    }

}